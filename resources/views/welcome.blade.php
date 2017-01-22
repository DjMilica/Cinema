@extends('layouts.welcomeMaster')

@section('title')
    Welcome!
@endsection

@section('navbar')
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">

                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i> <span class="light">Retro</span> Cinema
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li>
                        <a class="page-scroll" href="#signup">Registracija</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="{{route('signinform')}}">Prijava</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
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
    </nav>
@endsection

@section('headerSec')
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <a href="#signup" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>
@endsection
@section('content')

    <section id="signup" class="container content-section text-center signup-content">
            <div class="row">
                <div class="col-lg-6 col-lg-offset-3">
                    <form action="{{ route('signup') }}" method="post">
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label for="email">E-mail</label>
                            <input class="form-control" type="text" name="email" id="email" value="{{ Request::old('email') }}">
                        </div>
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error' : '' }}">
                            <label for="first_name">Ime</label>
                            <input class="form-control" type="text" name="first_name" id="first_name" value="{{ Request::old('first_name') }}">
                        </div>
                        <div class="form-group {{ $errors->has('last_name') ? 'has-error' : '' }}">
                            <label for="last_name">Prezime</label>
                            <input class="form-control" type="text" name="last_name" id="last_name" value="{{ Request::old('last_name') }}">
                        </div>
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <label for="password">Šifra</label>
                            <input class="form-control" type="password" name="password" id="password" value="{{ Request::old('password') }}">
                        </div>
                        <br>
                        <button type="submit" class="btn btn-default  btn-lg">Registruj se</button>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                    </form>
                </div>
            </div>
    </section>


    <!-- Footer -->
    <footer>
        <div class="container text-center">
            <p>Copyright &copy; Retro Cinema 2017</p>
        </div>
    </footer>

@endsection
