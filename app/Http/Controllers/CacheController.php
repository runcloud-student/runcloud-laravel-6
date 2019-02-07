<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function index(){
        return view('cache');
    }

    public function store(Request $request){
        Cache::put($request->key, $request->value, 5);

        return back();
    }

    public function get(Request $request){
        $data = Cache::get($request->key);

        return view('cache', compact(['data']));
    }
}
