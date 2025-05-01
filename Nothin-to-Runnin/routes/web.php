<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AccesController;
use App\Http\Controllers\UserController;

Route::get('/', function () { return view('registreren.index'); })->name('home');
Route::get('/login', function () { return view('auth.login'); })->name('login');

Route::get('/privacyverklaring', [DocumentController::class, 'showPrivacy'])->name('privacy');
Route::get('/algemene-voorwaarden', [DocumentController::class, 'showTerms'])->name('voorwaarden');

Route::post('/inschrijven', [RegistrationController::class, 'store'])->name('inschrijven.store');

Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('authenticate');

Route::post('/logout', [LoginController::class, 'logout'])->middleware(['auth'])->name('logout');

Route::get('/inzien', [AccesController::class, 'index'])->middleware(['auth'])->name('inzien');
Route::get('/inzien/{id}/details', [AccesController::class, 'show'])->middleware(['auth'])->name('inzien.show');
Route::get('/inzien/search', [AccesController::class, 'search'])->middleware(['auth'])->name('inzien.search');
Route::get('/inzien/{id}/delete', [AccesController::class, 'delete'])->middleware(['auth'])->name('inzien.delete');
Route::delete('/inzien/{id}', [AccesController::class, 'destroy'])->middleware(['auth'])->name('inzien.destroy');

Route::get('/gebruikers', [UserController::class, 'index'])->middleware(['auth'])->name('user');
Route::get('/gebruikers/{id}/edit', [UserController::class, 'edit'])->middleware(['auth'])->name('user.edit');
Route::put('/gebruikers/{id}', [UserController::class, 'update'])->middleware(['auth'])->name('user.update');
Route::get('/gebruikers/create', [UserController::class, 'create'])->middleware(['auth'])->name('user.create');
Route::post('/gebruikers/store', [UserController::class, 'store'])->middleware(['auth'])->name('user.store');
Route::get('/gebruikers/{id}/delete', [UserController::class, 'delete'])->middleware(['auth'])->name('user.delete');
Route::delete('/gebruikers/{id}', [UserController::class, 'destroy'])->middleware(['auth'])->name('user.destroy');