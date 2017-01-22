@extends('layouts.master')

@section('title')
    Sign in
@endsection

@section('stylesheets')
    <link href="{{asset('css/signin.css')}}" rel="stylesheet">
@endsection


@section('content')
    @if(count($errors) > 0)
        <div class="row">
            <div class="col-md-4 col-md-offset-4 error">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <form action="{{ route('signin') }}" method="post">
                <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                    <label for="email">E-Mail</label>
                    <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                </div>
                <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                    <label for="password">Šifra</label>
                    <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
                <br>
                <button type="submit" class="btn btn-default">Prijava</button>
            </form>
        </div>
    </div>
@endsection
