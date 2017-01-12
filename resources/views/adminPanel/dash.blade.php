@extends('layouts.master')
@section('title')
Admin
@endsection
@include('includes.headerForAdmin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-9">
                {{-- ako smo na primer uspesno dodali film, ispisace se poruka o uspesnosti!--}}
                @if(Session::has('success_flash_message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        {{ Session::get('success_flash_message') }}
                    </div>
                @endif
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title"><span class="label label-default">Dashboard</span></h1>
                    </div>
                    <div class="panel-body">
                        <p>Welcome admin!</p>
                        <p> Just to let you know : <strong>you have {{ $registeredUsers -1 }} registered users!</strong> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection