<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Test;
use Illuminate\Support\Facades\Cache;



Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/test', function (Request $request) {

    $value = Cache::get('key', function () {
        return Test::get();
    });
    return Test::all();
});