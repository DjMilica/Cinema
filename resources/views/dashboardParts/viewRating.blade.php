@extends('layouts.master')
@section('title')
    Repertoar
@endsection
@include('includes.headerForDash')
@section('content')
    <h1> Trenutne ocene filmova </h1>
    <br>
    <br>
    @foreach($shows as $show)
        <div>
            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $show->uri_poster) }}" alt="..." >
            </a>
            <p>{{$show->total}} </p>

        </div>
        <p> </p>
    @endforeach



@endsection