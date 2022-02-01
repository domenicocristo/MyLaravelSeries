@extends('layouts.main-layout')
@section('content')
    <section id="series-home">
        <h1>HOME</h1>

        <h1>
            <a href="{{ route('create') }}">CREATE NEW</a>
        </h1>

        <h1>LIST SERIES:</h1>
        <ul>
            @foreach ($series as $serie)
                <li>
                    <a href="{{ route('serie', $serie->id) }}">
                        <h2>{{ $serie -> title }}</h2>
                    </a>

                    <a href="{{ route('edit', $serie->id) }}">EDIT</a>
                    <a href="{{ route('delete', $serie->id) }}">- DELETE</a>
                </li>
            @endforeach
        </ul>
    </section>
@endsection