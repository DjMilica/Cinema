@extends('layouts.master')
@section('title')
    All projections
@endsection
@include('includes.headerForAdmin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-9">
                <h2>Projections ordered by date:</h2>
                <h3>           </h3>
                <h3>           </h3>
                @foreach($shows as $show)
                            <div class="col-sm-6 col-md-4">
                                <div class="thumbnail">
                                    <div class="caption">
                                        <h3>{{$show->name}}</h3>
                                        <p class="description">Datum: {{$show->date}}</p>
                                        <p class="description">Sala:  {{$show->description}}</p>
                                        <p class="description">Cena: {{$show->price}}</p>
                                    </div>
                                </div>
                            </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection