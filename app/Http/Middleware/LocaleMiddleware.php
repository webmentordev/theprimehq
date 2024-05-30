<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);
        if (in_array($locale, Config::get('app.locales'))) {
            App::setLocale($locale);
        } else {
            $locale = 'de';
            App::setLocale($locale);
            // $segments = $request->segments();
            // array_unshift($segments, $locale);
            // return redirect()->to(implode('/', $segments));
        }
        return $next($request);
    }
}