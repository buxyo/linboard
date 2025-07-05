@extends('layouts.app')

@section('title', __('Home'))

@section('content')
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ __('Welcome to Intelboard') }}</h5>
            <p class="card-text">{{ __('Your Sneat Laravel 12 integration is working.') }}</p>
        </div>
    </div>
@endsection
