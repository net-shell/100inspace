<?php

use Illuminate\Support\Facades\Route;
use App\Models\Screen;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/demo/{screen?}', function () {
    return view('app');
})->name('app');

Route::get('/', function () {
    return view('comingsoon');
});
