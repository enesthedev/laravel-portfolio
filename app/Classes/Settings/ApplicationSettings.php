<?php

namespace App\Classes\Settings;

use Spatie\LaravelSettings\Settings;

class ApplicationSettings extends Settings
{
    /**
     * Variable of application title.
     *
     * @var string
     */
    public string $application_title;

    /**
     * Variable of application description.
     *
     * @var string
     */
    public string $application_description;

    /**
     * Group of settings class.
     *
     * @return string
     */
    public static function group(): string
    {
        return 'application';
    }
}
