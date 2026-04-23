<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExportContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ExportContactController extends Controller
{
    public function create()
    {
        $columns = ['first_name', 'last_name', 'email', 'phone', 'address', 'company'];

        return view('contacts.export', compact('columns'));
    }

    public function store(ExportContactRequest $request)
    {
       $columns = $request->columns;

       $contacts = Contact::query()
                    ->forUser($request->user())
                    ->with('company')
                    ->latest()
                    ->get();

       return response()->streamDownload( function () use($columns, $contacts) {

           $resource = fopen('php://output', 'w'); //yozish uchu ochadi

           fputcsv($resource, $columns); //columnlarni qo'yadi yani birnichi qator

           //endi contactlarni qo'yib chiqamiz
           $contacts->each(function ($row) use ($resource, $columns) {
               $rowData = [];

               foreach ($columns as $column) {
                   if ($column === 'company') {
                       $rowData[] = $row->company->name;
                   } else {
                       $rowData[] = $row->{$column};
                   }
               }

               fputcsv($resource, $rowData);
           });
           fclose($resource);
       }, "contacts" . time() . ".csv",[
               'Content-Type' => 'text/csv'
           ]
       );
    }
}
