<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/2020');

Route::group(['prefix' => '{edition:year}', 'where' => ['edition' => '2019|2020']], function () {
    Route::get('/', [Controllers\PageController::class, 'home'])->name('home');
    Route::get('/diversity', [Controllers\PageController::class, 'diversity'])->name('diversity');
    Route::get('/code-of-conduct', [Controllers\PageController::class, 'codeOfConduct'])->name('code-of-conduct');
    Route::get('/speakers/{speaker:slug}', Controllers\SpeakerDetailsController::class)->name('speaker');
});