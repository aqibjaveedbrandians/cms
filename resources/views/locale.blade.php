@extends('layouts.master')
@section('title', 'Locale Page')
@section('content')
    <div class="container">
        <div class="row">
            <div class=".col-md-6">
                <h1>{{ __('message.welcome') }}</h1>
                <h1>{{ __('message.language') }}</h1>
            </div>
        </div>
    </div>
@endsection