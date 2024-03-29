<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::redirect('discount', 'https://ti.to/on3/fseu23/discount/10');
Route::redirect('2023/discount', 'https://ti.to/on3/fseu23/discount/10');

Route::redirect('/login', '/nova/login')->name('login');

Route::redirect('/', '/2023');
Route::redirect('/2020', '/2021');

Route::prefix('{edition:year}')->where(['edition' => '2022|2023'])->group(function () {
    Route::get('/', [Controllers\PageController::class, 'home'])->name('home');
    Route::get('/speakers/{speaker:slug}', [Controllers\PageController::class, 'speaker'])->name('speaker');
    Route::get('/speakers/{speaker:slug}/artwork.png', [Controllers\ArtworkController::class, 'talk'])->name('talk.artwork');
    Route::get('/workshops/{workshop:slug}', Controllers\WorkshopController::class)->name('workshop');
    Route::get('/workshops/{workshop:slug}/artwork.png', [Controllers\ArtworkController::class, 'workshop'])->name('workshop.artwork');
    Route::get('/cfp', [Controllers\PageController::class, 'cfp'])->name('cfp');
    Route::get('/values', [Controllers\PageController::class, 'values'])->name('values');
    Route::get('/diversity', [Controllers\PageController::class, 'diversity'])->name('diversity');
    Route::get('/code-of-conduct', [Controllers\PageController::class, 'codeOfConduct'])->name('code-of-conduct');
    Route::get('/sustainability', [Controllers\PageController::class, 'sustainability'])->name('sustainability');
    Route::get('/covid-19-policy', [Controllers\PageController::class, 'covid19Policy'])->name('covid-19-policy');
    Route::get('/faq', [Controllers\PageController::class, 'faq'])->name('faq');
});
