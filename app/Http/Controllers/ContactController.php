<?php

namespace App\Http\Controllers;

use App\Repositories\CompanyRepository;
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

    public function index(CompanyRepository $company)
    {
        $companies = $company->plunk();
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
