@extends('layouts.master')
@section('title')
    Repertoar
@endsection
@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')
    @if(Session::has('success_flash_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('success_flash_message') }}
        </div>
    @endif
    <h1> Trenutne ocene filmova </h1>
    <br>
    <br>
    @foreach($movies as $movie)
        <div>
            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $movie->uri_poster) }}" alt="..." >
            </a>
            <p>{{round($movie->rating,2)}} </p>

        </div>
        <p> </p>
    @endforeach



@endsection