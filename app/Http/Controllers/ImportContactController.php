<?php

namespace App\Http\Controllers;

use App\Http\Requests\ImportContactRequest;
use App\Models\Company;

class ImportContactController extends Controller
{
    public function create(){
        $companies = Company::query()->forUser(auth()->user())->pluck('name', 'id');
        return view('contacts.import', compact('companies'));
    }

    public function store(ImportContactRequest $request){
        dd("import");
    }
}
