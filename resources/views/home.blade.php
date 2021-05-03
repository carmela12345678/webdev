@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<<<<<<< HEAD
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
=======
            <div class="card border-info mb-3">
                <div class="card-header bg-info"><br>{{ __('Dashboard') }}<br></div>
>>>>>>> 3017d2a7e7935281ad712fb2054a7bc06bd4c858

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
