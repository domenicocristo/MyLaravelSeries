@extends('layouts.main-layout')
@section('content')
    
    <h1>Edit Serie</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('update', $serie->id) }}" method="POST">
        @method('POST')
        @csrf

        <label for="title">Title:</label>
        <input type="text" name="title" placeholder="title" value="{{ $serie->title }}"><br>

        <label for="author">Author:</label>
        <input type="text" name="author" placeholder="author" value="{{ $serie->author }}"><br>

        <label for="release_date">Release date:</label>
        <input type="date" name="release_date" value="{{ $serie->release_date }}"><br>

        <label for="rating">Rating:</label>
        <input type="number" name="rating" placeholder="rating" value="{{ $serie->rating }}"><br>
        
        <input type="submit" value="UPDATE"><br>

        <a href="{{url('/')}}">BACK TO HOME</a>
    </form>
@endsection