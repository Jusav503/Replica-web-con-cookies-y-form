<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;
use App\Http\Controllers\formController;

Route::view('/','pages.homeInntuyo')->name('inntuyo.home');

// Form
Route::post('send', [formController::class, 'addData'])->name('inntuyo.addData');

// Eventos
Route::get('eventos', [EventController::class, 'list'])->name('events.list');

