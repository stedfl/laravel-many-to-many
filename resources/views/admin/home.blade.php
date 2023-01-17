@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card mt-5">
                <div class="card-header">{{ __('Admin') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <h1>Benvenuta {{Auth::user()->name}}!</h1>
                    <p>Il tuo indirizzo email è {{Auth::user()->email}}</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection