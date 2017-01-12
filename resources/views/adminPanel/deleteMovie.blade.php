@extends('layouts.master')
@include('includes.headerForAdmin')
@section('title')
    Delete Movie
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-8">
                <h1 class="text-center">Delete a movie</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form method="post" action="{{route('erasemovie')}}">
                    <div class="form-group">
                        <label for="movies">Select a movie:</label>
                        <select class="form-control" name="movies">
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-danger {{ $disable }}"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </form>

            </div>
        </div>
    </div>
@endsection