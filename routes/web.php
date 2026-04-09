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

Route::resource('/contacts', ContactController::class);
Route::delete('/contacts/{contact}/restore', [ContactController::class, 'restore'])->name('contacts.restore');
Route::delete('/contacts/{contact}/force-delete', [ContactController::class, 'forceDelete'])->name('contacts.force-delete');

Route::resource('/companies', CompanyController::class);

Route::resources([
    '/tags' => TagController::class,
    '/tasks' => TaskController::class
]);

Route::resource('/activities', ActivityController::class);

Route::resource('/contacts.notes', ContactNoteController::class)->shallow();
