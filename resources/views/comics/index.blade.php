@extends('layout.app')

@section('content')
    <h3>Lista dei fumetti:</h3>
    <ul>
        @foreach ($comics_list as $comic)
            <li>
                <h4>
                    {{ $comic->title }}
                </h4>
                <p>
                    {{ $comic->series }}
                </p>
                <p>
                    {{ $comic->type }}
                </p>
            </li>
        @endforeach
    </ul>
@endsection 