<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', function () {
    sleep(10);
    return response()->json([],200);
});
