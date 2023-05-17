@extends('layouts.app')

@section('page-title', 'Edit Comic')
Edit comic book


@section('content')
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Image src:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ $comic->thumb }}" required>
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $comic->type }}" required>
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ $comic->series }}" required>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date:</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}"
                required>
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.50" min="1" max="99" class="form-control" id="price"
                name="price" value="{{ $comic->price }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" required> {{ $comic->description }} </textarea>
            {{-- la textarea non può avere al suo interno value="",per questo motivo è messo fuori --}}
        </div>
    </form>
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
