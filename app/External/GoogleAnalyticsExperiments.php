<?php

namespace App\External;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class GoogleAnalyticsExperiments
{
    const COOKIE = 'ga_experiments';
    private $request;
    private $config;

    public function __construct(Request $request)
    {
        $this->request = $request;
        $this->config = config('services.ga.experiments');
    }

    public function applyExperiments()
    {
        $shouldApply = array_filter($this->config, function ($experiment) {
            return !is_null($experiment['id']);
        });

        return !!count($shouldApply);
    }

    public function experiment()
    {
        if (!$this->applyExperiments()) {
            return;
        }

        if (!Cookie::has('ga_experiments')) {
            return;
        }

        $userExperiments = Cookie::get(self::COOKIE);

        foreach ($userExperiments as $route => $experiment) {
            if (!isset($this->config[$route])) {
                continue;
            }

            if (!$experiment['id']) {
                continue;
            }

            if ($route != $this->request->route()->getName()) {
                continue;
            }

            $ga = $this->config[$route];
            $variantId = $ga['variant'] = $experiment['variant'];

            if ($variantId > 0) {
                $ga['view'] .= '-' . $variantId;
            }

            return $ga;
        }
    }

    public function hasCookie()
    {
        return $this->request->cookies->has(self::COOKIE);
    }

    public function getCookie()
    {
        $uid = Str::random(32);
        $value = [];
        foreach ($this->config as $route => $experiment) {
            if (!$experiment['id']) {
                continue;
            }

            $range = $experiment['variants'];
            $value[$route] = [
                'uid' => $uid,
                'variant' => rand($range[0], $range[1]),
            ];
        }

        return Cookie::make(
            self::COOKIE,
            $value,
            $min = 60 * 24 * 365, // 1 year
            '/',
            $this->request->getHttpHost(),
            $this->request->secure(),
            $httpOnly = false
        );
    }
}
