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
                @foreach($shows as $show)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="{{asset('posters/' . $show->uri_poster)}}" alt="..." class="img-responsive">
                            <div class="caption">
                                <h3>{{$show->name}}</h3>
                                <p class="description">{{$show->year}}</p>
                                <p class="description">{{$show->director}}</p>
                                <p class="description">{{$show->total}}</p>
                                <div class="clearfix">
                                    <a href="{{url('/admin/movies', $show->movie_id)}}" class="btn btn-success pull-right" role="button">Pogledaj ocene</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection