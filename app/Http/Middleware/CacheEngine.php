<?php

namespace App\Http\Middleware;

use Cache;
use Closure;
use Illuminate\Http\Request;

class CacheEngine
{
    /*
     * В Kernel.php добавить в масив $routeMiddleware
     * 'cache' => \App\Http\Middleware\CacheEngine::class,
     * использовать добавляя Middleware к нужному маршруту.
     * Book:Laravel 5.1 Beauty Chuck Heintzelman
     * Chapter 16 - General Recap and Looking Forward
     * */

    public function getCacheKey($request){

        return $request->route()->uri .'_cache';
    }

    public function setCache(){

    }
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        /*

        !!! Пока выдает ошибку
        Exception
        Serialization of 'Closure' is not allowed


        */
//        $cacheKey = $this->getCacheKey($request);
        $cacheKey = $request->route()->uri .'_cache';


        if (Cache::has($cacheKey)) {
            return Cache::get($cacheKey);
        }


        $response =  $next($request);

        Cache::put($cacheKey, $response, 180);

        return $response;


    }
}
