<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactNoteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;



Route::get('/', WelcomeController::class)->name('welcome');

Route::controller(ContactController::class)->name('contacts.')->group(function(){
    Route::get('/contacts', 'index')->name('index');

    Route::get('/contacts/{id}', 'show')->name('show')->whereNumber('id');

    Route::get('/contacts/create', 'create')->name('create');
});

Route::resource('/companies', CompanyController::class);

Route::resources([
    '/tags' => TagController::class,
    '/tasks' => TaskController::class
]);

Route::resource('/activities', ActivityController::class)->only('index', 'show');

Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
