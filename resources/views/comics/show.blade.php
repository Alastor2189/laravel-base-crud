@extends('layout.app')

@section('content')
    <h3>Lista dei fumetti:</h3>
    <ul>
            <li>
                <h4>
                    {{ $show_comic->title }}
                </h4>
                <p class="mb-4">{{ $show_comic->description }}</p>
                    <div>
                            <a class="btn btn-primary" href="{{ route('comics.edit', ['comic' => $show_comic->id]) }}">Modifica</a>

                         <form action="{{ route('comics.destroy', [ 'comic' => $show_comic->id ]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Cancella</button>
                         </form>
                    </div>
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