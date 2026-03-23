<?php

use Illuminate\Support\Facades\Route;

 function getContacts():array{
     return $contacts = [
         1 => ['name' => 'Name 1', 'phone' => '1234567890'],
         2 => ['name' => 'Name 2', 'phone' => '2345678901'],
         3 => ['name' => 'Name 3', 'phone' => '3456789012'],
     ];

 }

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/contacts', function(){
    $contacts = getContacts();
    return view('contacts.index')->with('contacts', $contacts);
})->name('contacts.index');

Route::get('/contacts/{id}', function ($id){
    return view('contacts.show')->with('id', $id);
})->whereNumber('id')->name('contacts.show');

Route::get('/contacts/create', function (){
    return view('contacts.create');
})->name('contacts.create');
