@extends('layouts.master')
@section('title')
Reservation
@endsection

@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')

@section('content')     
<!--STRANICA ZA PRAVLJENJE REZERVACIJE-->
<div>
    <section>

        <div class="">
            <div class="row">
                <div class="section-header ">
                    <h1 class="text-standard " style="padding-left: 35%">Rezervišite kartu </h1>
                </div><br><br><br>

        
                <div class="col-lg-12">
                    <div class="box box-tiles style-gray">
                        <div class="row">
                            {!! Form::model($show, array('method' => 'PATCH', 'url' => 'dashboard/repertoar/'.$show->id, 'class' => 'form-horizontal form-bordered form-validate', 'role' => 'form', 'novalidate' => 'novalidate', 'files' => true)) !!}

                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="control-label">Ime filma</label>
                                </div>
                                <div class="col-md-11">
                                    <input  disabled type="text" name="name" id = "movie" class="form-control" value="{{ $show->movie->name }}"> </input> 
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="control-label">Datum projekcije</label>
                                </div>
                                <div class="col-md-11">
                                    <input disabled type="text" name="date" id = "date" class="form-control" value="{{ $show->date }}"> </input> 
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="control-label">Cena projekcije</label>
                                </div>
                                <div class="col-md-11">
                                    <input disabled type="text" name="price" id = "price" class="form-control" value="{{ $show->price }}"> </input> 
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="control-label">Mesto projekcije</label>
                                </div>
                                <div class="col-md-11">
                                    <input disabled type="text" name="price" id = "price" class="form-control" value="{{ $room->description }}"> </input>
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-1">
                                    <label class="control-label seats">Sedista</label>
                                </div>
                                <div class="col-md-11">
                                    <?php
                                        foreach($seats as $key=>$seat){
                                            if($key == $numOfColumns){
                                                $numOfColumns += 10;?>
                                                <br>        
                                            <?php }  ?>
                                                <input id="squaredOne" type="checkbox" name='seat_id[]' value="{{ $seat->id }}" <?php foreach($reservationForShow as $key => $reservation){ if($reservation->seat_id == $seat->id) echo 'checked disabled'; else echo '';}  ?> />
                                            <?php
                                        } ?>
                                </div>
                            </div>

                            
                            <div class="form-group">
                                <div class="form-footer" style="padding-left: 110px"> 
                                    <button type="submit" class="btn btn-primary">Rezervisite</button>
                                </div>
                            </div>

                            {!! Form::close() !!}

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>

@stop

