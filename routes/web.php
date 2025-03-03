<?php

use Illuminate\Support\Facades\App as FacadesApp;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Route;
if(FacadesApp::environment('production')) {
    URL::forceScheme('https');
}

Route::get('/', function () {
    return view('welcome');
});


Route::post('/contact', function () {
    sleep(5);
    return response()->json([],200);
});
