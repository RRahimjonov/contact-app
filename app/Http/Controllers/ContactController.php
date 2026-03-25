<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    protected function getContacts(): array
    {
        return $contacts = [
            1 => ['name' => 'Name 1', 'phone' => '1234567890'],
            2 => ['name' => 'Name 2', 'phone' => '2345678901'],
            3 => ['name' => 'Name 3', 'phone' => '3456789012'],
        ];

    }

    public function index()
    {
        $companies = [
            1 => ['name' => 'Company 1', 'contacts' => 3],
            2 => ['name' => 'Company 2', 'contacts' => 5],
        ];
        $contacts = $this->getContacts();
        return view('contacts.index', compact('contacts', 'companies'));
    }

    public function show($id)
    {
        $contacts = $this->getContacts();
        $contact = $contacts[$id];
        return view('contacts.show')->with('contact', $contact);
    }

    public function create()
    {
        return view('contacts.create');
    }

}
