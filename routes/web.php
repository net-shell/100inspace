<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $screens = \App\Models\Screen::with('pages')->get();
    return view('app')->withScreens($screens);
});
