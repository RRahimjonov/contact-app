<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contacts', function(){
    return view('contacts.index');
})->name('contacts.index');

Route::get('/contacts/{id}', function ($id){
    return view('contacts.show')->with('id', $id);
})->whereNumber('id')->name('contacts.show');

Route::get('/contacts/create', function (){
    return view('contacts.create');
})->name('contacts.create');
