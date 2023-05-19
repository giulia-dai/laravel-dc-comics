@extends('layouts.app')

@section('page-title', 'Edit Comic')
Edit comic book


@section('content')
    <form method="POST" action="{{ route('comics.update', ['comic' => $comic->id]) }}">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="thumb" class="form-label">Image src:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb', $comic->thumb) }}" required>
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $comic->title) }}" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                value="{{ old('type', $comic->type) }}" required>
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series:</label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series', $comic->series) }}" required>
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date:</label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}" required>
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.50" min="1" max="99"
                class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price', $comic->price) }}" required>
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description"
                name="description" required> {{ old('description', $pasta->description) }} </textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
            {{-- la textarea non può avere al suo interno value="",per questo motivo è messo fuori --}}
        </div>
    </form>
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
