@extends('layouts.master')
@section('title')
    Filmovi
@endsection

@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')
    <h1> Filmovi koji su se prikazuju u nasem bioskopu </h1>
    <br>
    <br>
    @foreach($movies->chunk(3) as $movieChunk)

    <div class="row">
        @foreach($movieChunk as $movie)
            <div class="col-sm-6 col-md-4 ">
                <div class="thumbnail" id="movie">


            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $movie->uri_poster) }}" alt="...">
            </a>

        <div class="caption">
            <h1>Naziv filma </h1>
            <h3>{{$movie->name}} </h3>
            <ul class="list-group">
                <li class="list-group-item" >
                    <dl class="dl-horizontal">
                        <dt>Naziv filma</dt>
                        <dd>{{$movie->name}}</dd>
                    </dl>
                </li>
                <li class="list-group-item">
                    <dl class="dl-horizontal">
                        <dt>Godina</dt>
                        <dd>{{$movie->year}}</dd>
                    </dl>
                </li>
                <li class="list-group-item">
                    <dl class="dl-horizontal">
                        <dt>Reziser</dt>
                        <dd>{{$movie->director}}</dd>
                    </dl>
                </li>
                <li class="list-group-item">
                    <dl class="dl-horizontal">
                        <dt>Rating</dt>
                        {{--<dd>{{$movie->total}}</dd>--}}
                        <dd>{{round($movie->rating,2)}}</dd>
                    </dl>
                </li>


            </ul>
        </div>
             </div>
                </div>
                    @endforeach
    </div>
    @endforeach

@endsection