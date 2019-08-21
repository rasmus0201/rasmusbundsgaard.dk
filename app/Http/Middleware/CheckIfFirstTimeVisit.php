<?php

namespace App\Http\Middleware;

use Closure;
use App\External\GoogleAnalyticsExperiments;

class CheckIfFirstTimeVisit
{
    private $ga;

    public function __construct(GoogleAnalyticsExperiments $ga)
    {
        $this->ga = $ga;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (!$this->ga->applyExperiments()) {
            return $next($request);
        }

        if ($this->ga->hasCookie()) {
            return $next($request);
        }

        return redirect('/')->withCookie($this->ga->getCookie());
    }
}
