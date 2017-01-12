@extends('layouts.master')
@section('title')
    All movies with grades
@endsection
@include('includes.headerForAdmin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-9">
                @foreach($movies->chunk(3) as $movieChunk)
                    <div class="row">
                        @foreach($movieChunk as $movie)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <img src="{{asset('posters/' . $movie->uri_poster)}}" alt="..." class="img-responsive">
                                    <div class="caption">
                                        <h3>{{$movie->name}}</h3>
                                        <p class="description">{{$movie->year}}</p>
                                        <p class="description">{{$movie->director}}</p>
                                        <p class="description">Ovde treba da pise ocena</p>
                                        <div class="clearfix">
                                            <a href="#" class="btn btn-success pull-right" role="button">Pogledaj ocene</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection