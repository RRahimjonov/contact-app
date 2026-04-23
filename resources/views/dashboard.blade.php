@extends('layouts.main')

@section('title', 'Contact App | Dashboard')

@section('content')
    <main class="py-5">
        <div class="container">
            <h1 class="h5 mb-3">
                Welcome
                <small class="text-muted">{{ $user->name }}</small>
            </h1>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            Companies
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-around">
                                <h3 class="h1">{{ $user->companies_count}}</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-header bg-white">
                            Contacts
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-around">
                                <h3 class="h1">{{ $user->contacts_count }}</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header bg-white">
                           Recent Contacts
                        </div>
                        <div class="card-body p-0">
                            <table class="table mb-0">
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Last Name</th>
                                    <th scope="col">Phone</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($contacts as $contact)
                                    <tr>
                                        <th scope="row">{{ $loop->index + 1 }}</th>
                                        <td>{{ $contact->first_name }}</td>
                                        <td>{{ $contact->last_name }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td width="150">
                                            <a href="{{ route('contacts.show', $contact->id) }}" class="btn btn-sm btn-circle btn-outline-info" title="Show"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                @empty
                                    @include('shared.empty', ['numCol' => 6, 'message' => 'No contact found'])
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
