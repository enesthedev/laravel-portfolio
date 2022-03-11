<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateApplicationSettings extends SettingsMigration
{
    /**
     * Laravel settings table migration.
     *
     * @return void
     * @throws \Spatie\LaravelSettings\Exceptions\SettingAlreadyExists
     */
    public function up(): void
    {
        $this->migrator->add('application.application_title', env('APP_NAME'));
        $this->migrator->add('application.application_description', env('APP_DESCRIPTION'));
    }
}
