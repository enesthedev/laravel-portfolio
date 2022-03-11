<?php

namespace App\Http\Controllers;

use App\Classes\Settings\ApplicationSettings;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Application settings variable.
     *
     * @var ApplicationSettings
     */
    public ApplicationSettings $applicationSettings;

    /**
     * Sets application settings to all controllers.
     *
     * @param ApplicationSettings $applicationSettings
     */
    public function __construct(ApplicationSettings $applicationSettings)
    {
        $this->applicationSettings = $applicationSettings;
    }
}
