@extends('layouts.master')
@section('title', '404 Page')
@section('content')
<section style="padding:100px 0px;">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <h1 style="font-size:162px;">404</h1>
                <h2>Page Not Found</h2>
                <p>We are  sorry, the page you requested could not be found. Please go back to the homepage</p>
                <a href="/" class="btn btn-primary">Visit Homepage</a>
            </div>
        </div>
    </div>
</section>
@endsection