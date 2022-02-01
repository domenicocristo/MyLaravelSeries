@extends('layouts.main-layout')
@section('content')
    <section id="series-details">
        <h1>DETAILS SERIE</h1>
        <h2>Title - {{ $serie -> title }}</h2>
        <div>Author - {{ $serie -> author }}</div>
        <div>Release date - {{ $serie -> release_date }}</div>
        <div>Rating - {{ $serie -> rating }}</div>
        <a href="{{url('/')}}">BACK TO HOME</a>
    </section>
@endsection