<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\CallbackRequestController;
use App\Http\Controllers\PhoneCallbackController;

// Home page
Route::get('/', [PageController::class, 'home'])->name('home');

// Service pages
Route::get('/anlagen', [PageController::class, 'anlagen'])->name('anlagen');
Route::get('/ruckabwicklung', [PageController::class, 'ruckabwicklung'])->name('rueckabwicklung');
Route::get('/uberuns', [PageController::class, 'uberuns'])->name('uberuns');
Route::get('/nettopolcie', [PageController::class, 'nettopolcie'])->name('nettopolcie');

// Rückabwicklung sub-pages
Route::get('/ruckabwicklung/lebensversicherung', [PageController::class, 'rueckabwicklung_lebensversicherung'])->name('rueckabwicklung.lebensversicherung');
Route::get('/ruckabwicklung/rente', [PageController::class, 'rueckabwicklung_rente'])->name('rueckabwicklung.rente');

// Anlagen sub-pages
Route::get('/anlagen/6-9-monate', [PageController::class, 'anlagen_sechs_neun'])->name('anlagen.kurz');

// BAV Sanierung
Route::get('/bav-sanierung', [PageController::class, 'bav_sanierung'])->name('bav');

// Referenzen
Route::get('/referenzen', [PageController::class, 'referenzen'])->name('referenzen');

// Contact pages
Route::get('/kontakt', [PageController::class, 'kontakt'])->name('kontakt');
Route::post('/kontakt', [PageController::class, 'kontaktSubmit'])->name('kontakt.submit');
Route::get('/kontakt/termin', [PageController::class, 'kontakt_termin'])->name('kontakt.termin');
Route::get('/kontakt/formular', [PageController::class, 'kontakt_formular'])->name('kontakt.formular');

// Legal pages
Route::get('/impressum', [PageController::class, 'impressum'])->name('impressum');
Route::get('/datenschutz', [PageController::class, 'datenschutz'])->name('datenschutz');

// Callback requests
Route::post('/callback', [CallbackRequestController::class, 'store'])->name('callback.store');

// Phone callback requests
Route::post('/phone-callback', [PhoneCallbackController::class, 'store'])->name('phone-callback.store');
