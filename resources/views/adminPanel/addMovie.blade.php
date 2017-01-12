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
                <h1 class="text-center">Insert a movie</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{route('storemovie')}}" enctype="multipart/form-data">
                  {{--  {{ csrf_field() }} --}}
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Title of the movie" required>
                    </div>

                    <div class="form-group">
                        <label for="yt_video_id">Youtube video ID</label>
                        <input type="text" class="form-control" id="yt_video_id" name="yt_video_id" placeholder="www.youtube.com/?v=VIDEO_ID" required>
                    </div>

                    <div class="form-group">
                        <label for="year">Year</label>
                        <input type="number" class="form-control" id="year" placeholder="2016" name="year" required>
                    </div>

                    <div class="form-group">
                        <label for="director">Director</label>
                        <input type="text" class="form-control" id="director" placeholder="Quentin Tarantino" name="director" required>
                    </div>
                    <div class="form-group">
                        <label for="poster">Poster</label>
                        <input type="file" class="form-control" id="uri_poster" name="uri_poster" required>
                    </div>
                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-default">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection