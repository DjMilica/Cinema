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
                @foreach($movies as $movie)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('posters/' . $movie->uri_poster)}}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h3>{{$movie->name}}</h3>
                                <p class="description">{{$movie->year}}</p>
                                <p class="description">{{$movie->director}}</p>
                                <p class="description">{{$movie->rating}}</p>
                                <?php if($movie->rating==0) $disabled = 'disabled'; else $disabled = ''; ?>
                                <div class="clearfix">
                                    <a href="{{url('/admin/movies', $movie->id)}}" class="btn btn-success pull-right {{ $disabled }}" role="button">Pogledaj ocene</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection