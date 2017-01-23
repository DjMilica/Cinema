@extends('layouts.master')
@section('title')
    About us
@endsection

@section('stylesheets')
    <link href="/css/about.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')
    <header class="header">

    </header>
    <center>
    <div class="nasa">
        <h1> <strong> Retro </strong> cinema </h1>
    <p>
        je bioskop koji već dugi niz godina postoji.<br>
        Karte za naše projekcije možete rezervisati putem interneta kako biste među prvima odgledali
        neke od novih filmova! <br>
        Posle rezervacije, karte kupujete na blagajni čije je radno vreme od 15h do 20h. <br>  <br>
        Ukoliko želite da nam predložite neki film, javite nam se putem mejla, rado ćemo uvažiti Vaše preporuke. <br>
        Svaku Vašu primedbu takođe možete poslati putem mejla, potrudićemo se da je ispravimo.
        <br><br>
        Posle svakog gledanja filma, možete ga oceniti kako bi drugima pomogli u odabiru!
    </p>
    </div>
    </center>


@endsection