<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/demo', function () {
    $screens = \App\Models\Screen::with('pages')->get();
    return view('app')->withScreens($screens);
});

Route::get('/', function () {
    return view('comingsoon');
});
