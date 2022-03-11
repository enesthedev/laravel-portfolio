<?php

namespace App\Http\Controllers;

use App\Classes\Settings\ApplicationSettings;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Shows welcome page of application.
     *
     * @param Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(ApplicationSettings $settings, Request $request)
    {
        return view('web.welcome')
            ->with([ 'applicationTitle' => $settings->application_title ]);
    }
}
