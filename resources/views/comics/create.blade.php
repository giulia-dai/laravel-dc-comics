@extends('layouts.app')

@section('page-title', 'Aggiungi fumetto')

@section('content')
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Image src:</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                required value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control  @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('tile') }}" required>
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control  @error('type') is-invalid @enderror" id="type" name="type"
                required value="{{ old('type') }}">
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series :</label>
            <input type="text" class="form-control  @error('series') is-invalid @enderror" id="series" name="series"
                required value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Date :</label>
            <input type="text" class="form-control  @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" required value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.50" min="1" max="99"
                class="form-control  @error('price') is-invalid @enderror" id="price" name="price" required
                value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" required>
                {{ old('description') }}
            </textarea>
        </div>
    </form>
    <button type="submit" class="btn btn-primary">Save</button>
@endsection
