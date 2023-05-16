@extends('layouts.app')

@section('page-title', 'lista fumetti')

@section('content')

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Create a new comic book</a>

    <table class="table table-striped table-hover">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Series</th>
                <th scope="col">Type</th>
                <th scope="col">Price</th>
                <th scope="col">Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <td scope="row">{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">See More</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection
