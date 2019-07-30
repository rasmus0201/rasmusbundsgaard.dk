<?php

namespace App\External;

use Cookie;
use Illuminate\Http\Request;

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

    public function experiment()
    {
        if (Cookie::has('ga_experiments')) {
            $userExperiments = Cookie::get(self::COOKIE);

            foreach ($userExperiments as $route => $experiment) {
                if (!isset($this->config[$route])) {
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

        return;
    }

    public function hasCookie()
    {
        return $this->request->cookies->has(self::COOKIE);
    }

    public function getCookie()
    {
        $uid = str_random(32);
        $value = [];
        foreach ($this->config as $route => $experiment) {
            $range = $experiment['variants'];
            $value[$route] = [
                'uid' => $uid,
                'variant' => rand($range[0], $range[1]),
            ];
        }

        return Cookie::make(
            self::COOKIE,
            $value,
            $min = 60*24*365, // 1 year
            '/',
            $this->request->getHttpHost(),
            $this->request->secure(),
            $httpOnly = false
        );
    }
}
