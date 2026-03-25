<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->whereNumber('id')->name('contacts.show');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
