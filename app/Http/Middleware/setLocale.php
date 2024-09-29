<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class setLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $lang = $request->input("lang");
        $supportedLanguages = ["en","fa"];
        $lang = $lang ? $lang : "fa";
        if(strlen($lang) === 2 && in_array($lang, $supportedLanguages)){
            app()->setLocale($lang);
        }
        return $next($request);
    }
}
