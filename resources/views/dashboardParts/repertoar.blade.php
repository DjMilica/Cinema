@extends('layouts.master')
@section('title')
    Repertoar
@endsection
@include('includes.headerForDash')
@section('content')
    <h1> Filmovi koji su na repertoaru </h1>
    <br>
    <br>
    @foreach($shows as $show)

        <div class="media">
            <div class="media-left media-middle">



                <a href="#">
                    <img class="media-object" src="{{ asset('posters/' . $show->uri_poster) }}" alt="...">
                </a>
            </div>
            <div class="media-body">

                <ul class="list-group">
                    <li class="list-group-item" >
                        <dl class="dl-horizontal">
                            <dt>Naziv filma</dt>
                            <dd>{{$show->name}}</dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl class="dl-horizontal">
                            <dt>Mesto odrzavanja  </dt>
                            <dd>{{$show->description}}</dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl class="dl-horizontal">
                            <dt>Datum i vreme</dt>
                            <dd>{{$show->date}}</dd>
                        </dl>
                    </li>
                    <li class="list-group-item">
                        <dl class="dl-horizontal">
                            <dt>Cena projekcije </dt>
                            <dd>{{$show->price}}</dd>
                        </dl>
                    </li>

                </ul>
                <iframe width="420" height="315"
                        src="{{$show->yt_video_id}}">
                </iframe>
            </div>
        </div>
    @endforeach



@endsection