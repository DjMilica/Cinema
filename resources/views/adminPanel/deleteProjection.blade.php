@extends('layouts.master')
@include('includes.headerForAdmin')
@section('title')
    Delete Movie
@endsection
{{-- TODO kako da handlujem slucaj kad nema nijedan show, tj. kako da se disable dugme???--}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-8">
                <h1 class="text-center">Delete a projection</h1>
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
               <form method="post" action="{{route('deleteshow')}}">
                    @foreach($movies as $movie)
                        <ul class="list-group">
                            <li class="list-group-item" >
                                <p> {{$movie->name}} </p>
                                <div class="form-group">
                                    <label for="shows">Select a show:</label>
                                    <select class="form-control" name="shows">
                                        @foreach($shows as $show)
                                            @if($movie->id == $show->movie_id)
                                            <option value="{{ $show->id }}">{{ $show->date}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </li>
                        </ul>
                    @endforeach

                    <input type="hidden" name="_token" value="{{ Session::token() }}">
                    <button type="submit" class="btn btn-danger {{ $disable }}"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                </form>
                {{--todo malo bolje razradi ovu drugu ideju!
                @foreach($shows as $show)
                    <form method="post" action="{{route('deleteshow')}}">
                        <div class="form-group">
                            <ul class="list-group">
                                <li class="list-group-item">
                                    {{--naziv filma, opis sale, vreme projekcije--}
                                    <p>{{$show->name}}</p>
                                    <p>{{$show->description}}</p>
                                    <p>{{$show->date}}</p>
                                </li>
                            </ul>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <button type="submit" class="btn btn-danger {{ $disable }}"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                    </form>
                @endforeach
            --}}
            </div>
        </div>
    </div>
@endsection