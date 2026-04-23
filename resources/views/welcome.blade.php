@extends('layouts.public')

@section('content')
    <div class="py-5 bg-white">
        <div class="px-4 my-5 text-center">
            <h1 class="display-5 fw-bold mt-4">Contact App</h1>
            <div class="col-lg-6 mx-auto">
                <p class="lead mb-4">Contact App gives you everything you need to organize your contacts easily.</p>
                <div class="d-flex justify-content-sm-center">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg mr-2">Sign up</a>
                    <a href="{{ route('login') }}" class="btn btn-outline-secondary btn-lg">Sign in</a>
                </div>
            </div>
        </div>
    </div>
@endsection
