@extends('layouts.master')
@section('title')
    Contact
@endsection

@section('stylesheets')
    <link href="/css/all.css" rel="stylesheet">
@endsection

@include('includes.headerForDash')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                    <address>
                        <strong>Retro bioskop</strong><br>
                        Ljeska 25, <br>
                        11000  Beograd<br>
                        Telefon: (011) 456-7890
                    </address>

                    <address>
                        <strong>Email adresa</strong><br>
                        <a href="mailto:#">bioskop@gmail.com</a>
                    </address>
                @if(Session::has('success_flash_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('success_flash_message') }}
                    </div>
                @endif
                <h1 class="text-center">Kontaktirajte nas</h1>
                <form method="post" action="{{ url('/dashboard/contact/send') }}">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">
                        <label for="email">Email adresa</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="text">Tekst</label>
                        <textarea name="text" class="form-control" placeholder="Napisite svoj zahtev..." required></textarea>
                    </div>
                    <button type="submit" class="btn btn-default">Posaljite</button>
                </form>
            </div>
        </div>
    </div>
    <br>
    <div class="container-fluid">

    </div>




@endsection