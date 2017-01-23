@extends('layouts.master')
@section('title')
    Filmovi
@endsection

@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')
    <h1> Filmovi koji su se prikazuju u našem bioskopu </h1>
    <br>
    <br>

    @foreach($movies->chunk(3) as $movieChunk)

    <div class="row">
        @foreach($movieChunk as $movie)
            <!-- Trailer Modal -->
                <div id="myModal" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                <h4 class="modal-title">YouTube Video</h4>
                            </div>
                            <div class="modal-body">
                                <iframe id="cartoonVideo" width="560" height="315" src="{{ $movie->yt_video_id }}" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- info o filmu -->
            <div class="col-sm-6 col-md-4 ">
                <div class="thumbnail" id="movie">


            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $movie->uri_poster) }}" alt="...">
            </a>

        <div class="caption">
            <h3 id="list"> Naziv filma </h3>
            <h1>{{$movie->name}} </h1>
            <ul class="list-group" id="list">

                <li class="list-group-item" id="list">
                    <dl class="dl-horizontal">
                        <dt>Godina</dt>
                        <dd>{{$movie->year}}</dd>
                    </dl>
                </li>
                <li class="list-group-item" id="list">
                    <dl class="dl-horizontal">
                        <dt>Reziser</dt>
                        <dd>{{$movie->director}}</dd>
                    </dl>
                </li>
                <li class="list-group-item" id="list">
                    <dl class="dl-horizontal">
                        <dt>Rating</dt>
                        {{--<dd>{{$movie->total}}</dd>--}}
                        <dd>{{round($movie->rating,2)}}</dd>
                    </dl>
                </li>
            </ul>
            <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Trailer</button>
        </div>
             </div>
                </div>
                    @endforeach
    </div>
    @endforeach

@endsection