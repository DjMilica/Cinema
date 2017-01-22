@extends('layouts.welcomeMaster')

@section('title')
    Welcome!
@endsection


@section('content')

    <!-- About Section -->
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
