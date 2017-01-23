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
    <?php $numOfColumns = 3; ?>
    @foreach($shows as $key=>$show)
            @if($key == $numOfColumns)
                <?php $numOfColumns += 3; ?>
                <br>
            @endif
                <div class="col-sm-6 col-md-4 ">
                    <div class="thumbnail" id="movie">
                        <a href="#">
                            <img class="media-object" src="{{ asset('posters/' . $show['slika']) }}" alt="...">
                        </a>

                        <div class="caption" >
                            {!! Form::open(array('method' => 'GET', 'id' => 'showForm', 'role' => 'form')) !!}
                            {!! Form::submit(null, ['id' => 'showButton', 'class' => 'btn btn-primary createEditButton', 'style' => 'display: none;']) !!}
                            {!! Form::close() !!}
                            {{--da bismo u .js mogli da uzmemo id, postavljamo id div-a --}}
                            <div  id='show_{{$show['id']}}' name="show_id">
                                <ul class="list-group" id="list">
                                    <li class="list-group-item" id="list">
                                        <dl class="dl-horizontal">
                                            <dt>Naziv filma</dt>
                                            <dd>{{$show['naziv']}}</dd>
                                        </dl>
                                    </li>
                                    <li class="list-group-item" id="list">
                                        <dl class="dl-horizontal">
                                            <dt>Mesto održavanja  </dt>
                                            <dd>{{$show['mesto']}}</dd>
                                        </dl>
                                    </li>
                                    <li class="list-group-item" id="list">
                                        <dl class="dl-horizontal">
                                            <dt>Datum i vreme</dt>
                                            <dd>{{$show['datum']}}</dd>
                                        </dl>
                                    </li>
                                    <li class="list-group-item" id="list">
                                        <dl class="dl-horizontal">
                                            <dt>Cena projekcije </dt>
                                            <dd>{{$show['cena']}}</dd>
                                        </dl>
                                    </li>

                                </ul>
                                {{-- <iframe width="420" height="315" src="{{$show->movie->yt_video_id}}"> --}}
                                </iframe>


                                <button type="button" class="btn btn-primary reservation" >Rezerviši</button>
                            </div>
                        </div>
                    </div>
                </div>
    @endforeach

@endsection


@section('script')
    <script src="{{ asset('js/repertoar.js') }}"></script>
@stop