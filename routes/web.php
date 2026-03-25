<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', WelcomeController::class)->name('welcome');

Route::controller(ContactController::class)->name('contacts.')->group(function(){
    Route::get('/contacts', 'index')->name('index');

    Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('show');

    Route::get('/contacts/create', 'create')->name('create');
});

