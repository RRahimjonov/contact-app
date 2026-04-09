@extends('layouts.main')

@section('title', 'Contact App | All contacts ')

@section('content')
    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">All Contacts</h2>
                                <div class="ml-auto">
                                    <a href="{{ route('contacts.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('contacts._filter')
                            <table class="table table-striped table-hover">
                                @if($message = session('message'))
                                    <div class="alert alert-success">
                                        {{ $message }}
                                        @if($undoRoute = session('undoRoute'))
                                            <form action="{{ $undoRoute }}" method="POST" style="display: inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn alert-link">Undo</button>
                                            </form>

                                        @endif
                                    </div>
                                @endif
                                <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">First Name</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Company</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($contacts as $contact)
                                    @include('contacts._contact', ['contact' => $contact])
                                @empty
                                    @include('contacts._empty')
                                @endforelse
                                </tbody>
                            </table>
                            {{ $contacts->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

