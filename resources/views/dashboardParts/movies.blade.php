@extends('layouts.master')
@section('title')
    Filmovi
@endsection
@include('includes.headerForDash')
@section('content')
    <h1> Filmovi koji su se prikazuju u nasem bioskopu </h1>
    <br>
    <br>
    @foreach($movies as $movie)

    <div class="media">
        <div class="media-left media-middle">



            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $movie->uri_poster) }}" alt="...">
            </a>
        </div>
        <div class="media-body">

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
    @endforeach

@endsection