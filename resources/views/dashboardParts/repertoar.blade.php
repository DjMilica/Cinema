@extends('layouts.master')
@section('title')
    Repertoar
@endsection
@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')
    <h1  style="padding-left: 35%"> Filmovi koji su na repertoaru </h1>
    <br>
    <br>

    @if(Session::has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            {{ Session::get('message') }}
        </div>
    @endif

    @foreach($shows as $show)

        <div class="media">
            <div class="media-left media-middle">
                <a href="#">
                    <img class="media-object" src="{{ asset('posters/' . $show->movie->uri_poster) }}" alt="...">
                </a>
            </div>
            <div class="media-body" >
                {!! Form::open(array('method' => 'DELETE', 'id' => 'showForm', 'role' => 'form')) !!}
                {!! Form::submit(null, ['id' => 'showButton', 'class' => 'btn btn-primary createEditButton', 'style' => 'display: none;']) !!}
                {!! Form::close() !!}
                {{--da bismo u .js mogli da uzmemo id, postavljamo id div-a --}}
                <div  id='show_{{$show->id}}' name="show_id">
                    <ul class="list-group">
                        <li class="list-group-item" >
                            <dl class="dl-horizontal">
                                <dt>Naziv filma</dt>
                                <dd>{{$show->movie->name}}</dd>
                            </dl>
                        </li>
                        <li class="list-group-item">
                            <dl class="dl-horizontal">
                                <dt>Mesto odrzavanja  </dt>
                                <dd>{{$show->room->description}}</dd>
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
                   {{-- <iframe width="420" height="315" src="{{$show->movie->yt_video_id}}"> --}}
                    </iframe>

                    <br>
                    <button type="button" class="btn btn-primary reservation" >Rezervisi</button>
                </div>
            </div>
        </div><br><br>
    @endforeach

@endsection


@section('script')
    <script src="{{ asset('js/repertoar.js') }}"></script>
@stop