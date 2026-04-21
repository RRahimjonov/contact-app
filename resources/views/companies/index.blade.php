@extends('layouts.main')

@section('title', 'Contact App | All companies ')

@section('content')
    <!-- content -->
    <main class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-title">
                            <div class="d-flex align-items-center">
                                <h2 class="mb-0">
                                    All Companies
                                    @if(request()->query('trash'))
                                        <small>(In trash)</small>
                                    @endif
                                </h2>
                                <div class="ml-auto">
                                    <a href="{{ route('companies.create') }}" class="btn btn-success"><i class="fa fa-plus-circle"></i> Add New</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            @includeIf('companies._filter')
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
                                    <th scope="col">Name</th>
                                    <th scope="col">Website</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Contacts</th>
                                    <th scope="col">Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($companies as $company)
                                    @include('companies._company', ['company' => $company])
                                @empty
                                    @include('companies._empty')
                                @endforelse
                                </tbody>
                            </table>
                            {{ $companies->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection

