@extends('layouts.master')
@include('includes.headerForDash')
@section('content')
    <h1> WELCOME TO THE CINEMA APPLICATION! HERE WE ARE FOR YOU! </h1>
    @if (Session::get('isAdmin'))
       <h3> ULogovani ste kao admin </h3>
    @else
        <h3> ULogovani ste kao user </h3>

    @endif

@endsection