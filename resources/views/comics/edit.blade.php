@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">EDIT:
            <a href="{{ route('comics.show', $comics->id) }}">{{ $comics->title }}</a>
        </h1>

        <div class="row">
            <div class="col-md-8 offset md-2">
                <form action="{{ route('comics.update', $comics->id) }}" method="post">
                    @csrf
                    @method('PATCH')

                    <div class="mb-3">
                        <label for="title" class="control-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $comics->title }}">
                    </div>

                    <div class="mb-3">
                        <label for="series" class="control-label">Series</label>
                        <input type="text" class="form-control" id="series" name="series" value="{{ $comics->series }}">
                    </div>

                    <div class="mb-3">
                        <label for="sale_date" class="control-label">Sale Date</label>
                        <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comics->sale_date }}">
                    </div>

                    <div class="mb-3">
                        <label for="price" class="control-label">Price</label>
                        <input type="price" class="form-control" id="price" name="price" value="{{ $comics->price }}">
                    </div>

                    <div class="mb-3">
                        <label for="type" class="control-label">Type</label>
                        <select class="form-control" id="type" name="type">
                            <option value="Comic Book" @if ($comics->type == 'Comic Book') selected @endif>Comic Book</option>
                            <option value="Graphic Novel" @if ($comics->type == 'Graphic Novel') selected @endif>Graphic Novel</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="control-label">Description</label>
                        <textarea class="form-control" id="description" name="description"
                            rows="6">{{ $comics->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="thumb" class="control-label">Image</label>
                        <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comics->thumb }}">
                    </div>

                    <button type="submit" class="btn btn-primary">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection
