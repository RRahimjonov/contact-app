<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $companies = Company::query()->forUser(auth()->user())->orderBy("name")->get();

        $contacts = Contact::query()->allowedTrash()
            ->allowedSort('first_name')
            ->allowedFilters('company_id')
            ->allowedSearches('first_name', 'last_name', 'email')
            ->forUser(auth()->user())
            ->paginate(10);
        return view('contacts.index', compact('contacts', 'companies'));
    }
    public function show(Contact $contact)
    {
        return view('contacts.show', compact('contact'));
    }
    public function create()
    {
        $companies = Company::quey()->forUser(auth()->user())->orderBy("name")->get();
        $contact = new Contact();
        return view('contacts.create', compact('companies', 'contact'));
    }
    public function store(ContactRequest $request)
    {
        $request->user()->contacts()->create($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact added successfully');
    }
    public function edit(Contact $contact)
    {
        $companies = Company::query()->forUser(auth()->user())->orderBy("name")->get();
        return view('contacts.edit', compact('contact', 'companies'));
    }

    public function update(ContactRequest $request, Contact $contact)
    {
        $contact->update($request->all());
        return redirect()->route('contacts.index')->with('message', 'Contact has been updated successfully');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
        $redirect = request()->query('redirect');
        return ($redirect ? redirect()->route($redirect) : back())
            ->with('message', 'Contact has been moved to trash.')
            ->with('undoRoute', $this->getUndoRoute('contacts.restore', $contact));
    }
    public function restore(Contact $contact)
    {
        $contact->restore();
        return back()
            ->with('message', 'Contact has been restored successfully.')
            ->with('undoRoute', $this->getUndoRoute('contacts.destroy', $contact));
    }

    public function getUndoRoute($name, $resource)
    {
        return request()->missing('undo') ? route($name, [$resource->id, 'undo' => true]) : null;
    }
    public function forceDelete(Contact $contact)
    {
        $contact->forceDelete();
        return back()
            ->with('message', 'Contact has been removed permanently.');
    }
}
