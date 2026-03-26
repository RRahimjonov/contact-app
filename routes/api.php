<?php

use App\Http\Controllers\API\ContactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::apiResource('/contacts', ContactController::class)->names([
    'index' => 'api.contacts.index',
    'store' => 'api.contacts.store',
    'show' => 'api.contacts.show',
    'update' => 'api.contacts.update',
    'destroy' => 'api.contacts.destroy',
]);
