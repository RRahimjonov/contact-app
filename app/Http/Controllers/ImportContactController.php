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

        $rows = $request->getCsvRows();

        $importedData = 0;
        $invalidData = 0;
        foreach($rows as $row){
            if(count($row) < 5){
                $invalidData++;
                continue;
            }
            $request->user()->contacts()->create([
                'first_name' => $row[0],
                'last_name' => $row[1],
                'email' => $row[2],
                'phone' => $row[3],
                'address' => $row[4],
                'company_id' => $request->company_id
            ]);
            $importedData++;
        }
         if( $importedData === 0){
             return redirect()->back()
                 ->withErrors(['csv' => 'No contacts were imported. Please check your CSV format and try again.']);
         }
        return redirect()->route('contacts.index')
            ->with('message', $importedData .' contacts imported and '. $invalidData. ' invalid rows detected!');
    }
}
