@extends('layout.app')

@section('content')
    <h3>Lista dei fumetti:</h3>
    <ul>
            <li>
                <h4>
                    {{ $show_comic->title }}
                </h4>
                <p>
                    {{ $show_comic->description}}
                </p>
                <p>
                    <img src="{{ $show_comic->thumb}}" alt="">
                </p>
                <p>
                    {{ $show_comic->price}}
                </p>
                <p>
                    {{ $show_comic->series }}
                </p>
                <p>
                    {{ $show_comic->sale_date }}
                </p>
                <p>
                    {{ $show_comic->type }}
                </p>
            </li>
    </ul>
@endsection 