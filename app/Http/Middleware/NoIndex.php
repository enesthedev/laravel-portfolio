<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Spatie\RobotsMiddleware\RobotsMiddleware;

class NoIndex extends RobotsMiddleware
{
    /**
     * Handle robots.
     *
     * @param Request $request
     * @return bool
     */
    protected function shouldIndex(Request $request): bool
    {
        return false;
    }
}
