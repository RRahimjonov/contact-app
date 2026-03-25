<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::controller(ContactController::class)->group(function(){
    Route::get('/contacts', 'index')->name('contacts.index');

    Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('contacts.show');

    Route::get('/contacts/create', 'create')->name('contacts.create');
});

