@extends('layouts.app')

@section('page-title')
    Comic:{{ $comic->title }}
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="ms_container">
                <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
                <h3>{{ $comic->title }}</h3>
                <h5>Series: {{ $comic->series }}</h5>
                <h5>Type: {{ $comic->type }}</h5>
                <h5>Sale Date: {{ $comic->sale_date }}</h5>
                <h6>Price ${{ $comic->price }}</h6>
                <p class="mt-2">{{ $comic->description }}</p>
            </div>
            <a href="{{ route('comics.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>


    {{-- form
    <form method="POST" action="{{ route('comics.store') }}">
        @csrf
        <div class="mb-3">
            <label for="thumb" class="form-label">Image src:</label>
            <input type="text" class="form-control" id="thumb" name="thumb" required>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Title:</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Series :</label>
            <input type="text" class="form-control" id="series" name="series" required>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Price:</label>
            <input type="number" step="0.50" min="1" max="99" class="form-control" id="price"
                name="price" required>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description:</label>
            <textarea type="text" class="form-control" id="description" name="description" required>ciooooa</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form> --}}
@endsection
