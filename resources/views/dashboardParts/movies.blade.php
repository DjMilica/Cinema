@extends('layouts.master')
@section('title')
    Filmovi
@endsection
@include('includes.headerForDash')
@section('content')
    <h1> Filmovi koji su se prikazuju </h1>
    @foreach($movies as $movie)
        <p> {{$movie->name}} </p>
        <img src="{{ asset('posters/' . $movie->uri_poster) }}" />

    @endforeach


@endsection