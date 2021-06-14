@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>404</h1>

        <p class="mb-5">
            Ops... something went wrong! The resource you are looking for is not on this site.
        </p>

        <a href="{{ route('home') }}">Back to home</a>
    </div>
@endsection
