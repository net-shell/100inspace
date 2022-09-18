<?php

use Illuminate\Support\Facades\Route;
use App\Models\Screen;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

if (env('SITE_LIVE')) {
    Route::get('/{screen?}', function () {
        return view('app');
    })->name('app');
} else {
    Route::get('/demo/{screen?}', function () {
        return view('app');
    })->name('app');

    Route::get('/', function () {
        return view('comingsoon');
    });
}
