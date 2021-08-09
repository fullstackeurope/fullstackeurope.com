<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => 'doNotCacheResponse'], function () {
    Route::mailcoach('mailcoach');
    Route::mailcoachEditor();
});

Route::redirect('/', '/2021');
Route::redirect('/2020', '/2021');

Route::group(['prefix' => '{edition:year}', 'where' => ['edition' => '2019|2021|2022']], function () {
    Route::get('/', [Controllers\PageController::class, 'home'])->name('home');
    Route::get('/speakers/{speaker:slug}', [Controllers\PageController::class, 'speaker'])->name('speaker');
    Route::get('/speakers/{speaker:slug}/artwork.png', [Controllers\ArtworkController::class, 'talk'])->name('talk.artwork');
    Route::get('/workshops/{workshop:slug}', Controllers\WorkshopController::class)->name('workshop');
    Route::get('/workshops/{workshop:slug}/artwork.png', [Controllers\ArtworkController::class, 'workshop'])->name('workshop.artwork');
    Route::get('/diversity', [Controllers\PageController::class, 'diversity'])->name('diversity');
    Route::get('/code-of-conduct', [Controllers\PageController::class, 'codeOfConduct'])->name('code-of-conduct');
    Route::get('/faq', [Controllers\PageController::class, 'faq'])->name('faq');
});
