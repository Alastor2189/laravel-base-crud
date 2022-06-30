@extends('layout.app')

@section('content')
    <h3>Dettagli del fumetto</h3>
    <ul>
        <li>
            <h3>
                {{ $current_comic->title }}
            </h3>
            <p>
                {{ $current_comic->description }}
            </p>
            <img src="{{ $current_comic->thumb }}" alt="{{ $current_comic->series }}">
            <p>
                Prezzo: {{ $current_comic->price }} euro
            </p>
            <p>
                {{ $current_comic->series }}
            </p>
            <p>
                In offerta dal: {{ $current_comic->sale_date }}
            </p>
            <p>
                {{ $current_comic->type }}
            </p>
        </li>
    </ul>
@endsection