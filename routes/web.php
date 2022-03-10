<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as Localization;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix(Localization::setLocale())
    ->middleware(['locale.session.redirect','localization.redirect','locale.view.path'])
    ->group(function () {

        Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])
            ->name('welcome');

        Route::prefix(Localization::transRoute('routes.manage'))
            ->name('admin.')
            ->group(function () {

                Route::middleware('guest')
                    ->group(function () {
                        Route::get(Localization::transRoute('routes.login'), [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'index'])
                            ->name('login');
                    });
            });
    });
