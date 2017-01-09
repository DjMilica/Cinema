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
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 class="panel-title">Dashboard</h1>
                    </div>
                    <div class="panel-body">
                        <p>Welcome admin!</p>
                        <p>Just to let you know : <strong>you have {{ $registeredUsers }} registered users!</strong> </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection