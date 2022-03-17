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

        Route::prefix(Localization::transRoute('routes.install'))
            ->name('install.')
            ->middleware('if.installed')
            ->group(function () {

                Route::get('/', [\App\Http\Controllers\InstallApplicationController::class, 'index'])
                    ->name('prepare');
            });

        Route::middleware('is.installed')
            ->group(function () {

                /**
                 * Localized Indexable Routes
                 *
                 * @x-robots-tag all
                 */
                Route::middleware('index')
                    ->group(function () {

                        Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])
                            ->name('welcome');
                    });

                /**
                 * Localized Admin Routes
                 *
                 * @x-robots-tag none
                 */
                Route::prefix(Localization::transRoute('routes.manage'))
                    ->middleware('no.index')
                    ->name('admin.')
                    ->group(function () {

                        Route::middleware('auth')
                            ->group(function () {

                                Route::get('/', function () { echo 'test'; });
                            });

                        Route::middleware('guest')
                            ->group(function () {

                                Route::get(Localization::transRoute('routes.login'), [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'index'])
                                    ->name('login');
                                Route::post(Localization::transRoute('routes.login'), [\App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'store'])
                                    ->name('login');
                            });
                    });

            });

    });
