<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegistrationController;

Route::get('/', function () { return view('registreren.index'); })->name('home');
Route::get('/privacyverklaring', [DocumentController::class, 'showPrivacy'])->name('privacy');
Route::get('/algemene-voorwaarden', [DocumentController::class, 'showTerms'])->name('voorwaarden');
Route::post('/inschrijven', [RegistrationController::class, 'store'])->name('inschrijven.store');
