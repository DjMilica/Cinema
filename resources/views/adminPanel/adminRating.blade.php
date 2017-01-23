
@extends('layouts.master')
@section('title')
    Rating
@endsection
@include('includes.headerForAdmin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-9">
                <h2>Ratings for {{$usersRating[0]->name}}:</h2>
                <h3>           </h3>
                <h3>           </h3>
                @foreach($usersRating as $ur)
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <p class="description">Name: {{$ur->first_name}} {{$ur->last_name}}</p>
                                    <p class="description">Rating: {{$ur->rating}}</p>
                                </div>
                            </div>
                        </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection