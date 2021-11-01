<?php

namespace App\Http\Controllers\Memcached;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class MemcachedController extends Controller
{
    public function clear()
    {
        Cache::flush();

        return redirect('/news');

    }

//    public function stats()
//    {
//
//        $stats = Cache::getMemcached()->getStats();
//
////        dd($stats);
//
//        return view('parts.memcached', [
//            'stats' => array_pop($stats)
//        ]);
//    }

}
