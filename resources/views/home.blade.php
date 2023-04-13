@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <div class="mt-5 text-center">
                    <a class="btn btn-success" href="{{ url('/') }}">Back to home page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
