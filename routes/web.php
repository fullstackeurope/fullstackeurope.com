<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/2020');

Route::group(['prefix' => '{edition:year}', 'where' => ['edition' => '2019|2020']], function () {
    Route::get('/', Controllers\HomeController::class)->name('home');
    Route::get('/speakers/{speaker:slug}', Controllers\SpeakerDetailsController::class)->name('speaker');
});
