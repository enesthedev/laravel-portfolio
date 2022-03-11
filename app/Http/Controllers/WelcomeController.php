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
    public function index(Request $request)
    {
        return view('web.welcome')
            ->with([
                'applicationTitle' => $this->applicationSettings->application_title,
                'applicationDescription' => $this->applicationSettings->application_description
            ]);
    }
}
