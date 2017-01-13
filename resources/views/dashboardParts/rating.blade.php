@extends('layouts.master')
@section('title')
    Rating
@endsection
@include('includes.headerForDash')
@section('content')
    <h1> Ovde mozete da ocenite filmove </h1>

    <div class="container">
        <div class="row">

            <div class="col-md-8">
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

         {{--      <form method="POST" action="{{route('addRating')}}" enctype="multipart/form-data">


                    <div class="form-group">
                        <label for="movies">Izaberiti film:</label>
                        <select class="form-control" name="movies">
                            @foreach($movies as $movie)
                                <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="rating">Ocenu koju zelite da date</label>
                        <input type="text" class="form-control" id="rating"  name="rating" required>
                    </div>

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>

--}}
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3">
                            <h3>Ocenjivanje</h3>
                            <form method="POST" action="{{route('addRating')}}" enctype="multipart/form-data">
                                <div class="form-group >
                                    <label for="movies">Choose movie</label>
                                    <select class="form-control" name="movies">
                                        @foreach($movies as $movie)
                                            <option value="{{ $movie->id }}">{{ $movie->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group {{ $errors->has('rating') ? 'has-error' : '' }}">
                                    <label for="rating">Your rating</label>
                                    <input class="form-control" type="number" name="rating" id="rating" value="{{ Request::old('rating') }}">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <input type="hidden" name="_token" value="{{ Session::token() }}">
                            </form>
                        </div>
                    </div>
@endsection