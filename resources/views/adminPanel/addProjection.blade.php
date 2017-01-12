@extends('layouts.master')

@include('includes.headerForAdmin')

@section('title')
    Add Movie
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-8">
                <h1 class="text-center">Insert a projection</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{route('addshow')}}" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="movies">Select a movie:</label>
                        <select class="form-control" name="movies">
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="rooms">Select a room:</label>
                        <select class="form-control" name="rooms">
                            {{--dodaj kod return view()->with(rooms)--}}
                            @foreach($rooms as $room)
                                <option value="{{ $room->id }}">{{ $room->description }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{--TODO proveri kako da ti se pojavi kalendar ovde! datetimepicker()--}}
                    <div class="form-group">
                        <label for="datetime">Datetime</label>
                        <input type="text" class="form-control" id="datetime" placeholder="2017-01-11 18:00:00" name="datetime" required>
                    </div>
                    <div class="form-group">
                        <label for="price">Price</label>
                        <input type="number" class="form-control" id="price" placeholder="300" name="price" required>
                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection