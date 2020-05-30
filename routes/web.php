<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/2020');

Route::group(['prefix' => '{edition:year}'], function () {
    Route::get('/', Controllers\HomeController::class)->name('home');
});
