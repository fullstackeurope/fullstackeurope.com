<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/2021');
Route::redirect('/2020', '/2021');

Route::group(['prefix' => '{edition:year}', 'where' => ['edition' => '2019|2021|2022']], function () {
    Route::get('/', [Controllers\PageController::class, 'home'])->name('home');
    Route::get('/speakers/{speaker:slug}', [Controllers\PageController::class, 'speaker'])->name('speaker');
    Route::get('/diversity', [Controllers\PageController::class, 'diversity'])->name('diversity');
    Route::get('/code-of-conduct', [Controllers\PageController::class, 'codeOfConduct'])->name('code-of-conduct');
    Route::get('/faq', [Controllers\PageController::class, 'faq'])->name('faq');
});
