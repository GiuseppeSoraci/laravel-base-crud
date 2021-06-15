@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $comics->title }}</h1>
        <div class="mb-5">
            <span class="badge bg-primary">{{ $comics->series }}</span>
            <div>Type: {{ $comics->type }}</div>
            <div>Sale Date: {{ $comics->sale_date }}</div>
            <a class="badge bg-warning" href="{{ route('comics.edit', $comics->id) }}">Edit</a>
        </div>

        <div class="row">
            <div class="col-md-6">
                <img class="img-fluid" src="{{ $comics->thumb }}" alt="{{ $comics->title }}">
            </div>

            <div class="col-md-6">
                {!! $comics->description !!}
            </div>
        </div>

        <a href="{{ route('comics.index') }}">Back to archive</a>
    </div>

@endsection
