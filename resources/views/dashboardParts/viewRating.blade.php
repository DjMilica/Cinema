@extends('layouts.master')
@section('title')
    Repertoar
@endsection
@include('includes.headerForDash')
@section('content')
    @if(Session::has('success_flash_message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('success_flash_message') }}
        </div>
    @endif
    <h1> Trenutne ocene filmova </h1>
    <br>
    <br>
    @foreach($shows as $show)
        <div>
            <a href="#">
                <img class="media-object" src="{{ asset('posters/' . $show->uri_poster) }}" alt="..." >
            </a>
            <p>{{$show->total}} </p>

        </div>
        <p> </p>
    @endforeach



@endsection