<?php

namespace App\View\Composers;

use App\Classes\Settings\ApplicationSettings;
use Illuminate\View\View;

class ApplicationSettingsComposer
{
    protected ApplicationSettings $applicationSettings;

    public function __construct(ApplicationSettings $applicationSettings)
    {
        $this->applicationSettings = $applicationSettings;
    }

    public function compose(View $view)
    {
        $view->with([
            'applicationTitle' => $this->applicationSettings->application_title,
            'applicationDescription' => $this->applicationSettings->application_description
        ]);
    }
}
