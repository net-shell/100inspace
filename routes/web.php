<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/demo/{screen?}', function (\App\Models\Screen $screen = null) {
    $screens = \App\Models\Screen::with('pages')->get();
    return view('app')->withScreens($screens);
});

Route::get('/', function () {
    return view('comingsoon');
});
