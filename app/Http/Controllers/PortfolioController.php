<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\External\GoogleAnalyticsExperiments;

class PortfolioController extends Controller
{
    public function index(Request $request, GoogleAnalyticsExperiments $ga)
    {
        if ($experiment = $ga->experiment()) {
            return response()->view($experiment['view'], ['experiments' => [$experiment]]);
        }

        return response()->view('welcome');
    }
}
