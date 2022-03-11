<?php

namespace App\View\Composers;

use Illuminate\View\View;

class ApplicationSettingsComposer
{

    /**
     * Sets env variables as global variable of views.
     *
     * @param View $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with([
            'applicationTitle' => env('APP_NAME'),
            'applicationDescription' => env('APP_DESCRIPTION')
        ]);
    }
}
