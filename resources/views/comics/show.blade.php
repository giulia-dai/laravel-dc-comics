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
@endsection
