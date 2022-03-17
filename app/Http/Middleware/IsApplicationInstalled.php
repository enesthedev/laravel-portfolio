<?php

namespace App\Http\Middleware;

use App\Models\User;
use Closure;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Http\Request;

class IsApplicationInstalled
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (env('APP_DEBUG'))
            if (! (new Filesystem())->exists(base_path() . '/.installed'))
                try {
                    User::count();
                } catch (\PDOException $e) {
                    return redirect()->route('install.prepare');
                }

        return $next($request);
    }
}
