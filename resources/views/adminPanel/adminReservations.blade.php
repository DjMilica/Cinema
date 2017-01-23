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
                @foreach($users as $ur)
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <p class="description">Movie: {{$ur->name}} </p>
                                <p class="description">Date: {{$ur->date}}</p>
                                <p class="description">Seat: row-{{$ur->row}}, column-{{$ur->column}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection