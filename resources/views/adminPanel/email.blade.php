@extends('layouts.master')
@section('title')
    Email user
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
                    <form method="post" action="{{ route('sendemail') }}">
                        <div class="form-group">
                            <label for="email">Select email of user:</label>
                            <select class="form-control" name="email">
                                @foreach($users as $user)
                                    @if(!$user->isAdmin())
                                        <option value="{{ $user->email }}">{{ $user->email }}</option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="text">Text</label>
                            <textarea name="text" class="form-control" placeholder="Your text here..." required></textarea>
                        </div>
                        <input type="hidden" name="_token" value="{{ Session::token() }}">
                        <button type="submit" class="btn btn-default">Send</button>
                    </form>
                </div>

            </div>
        </div>
    </div>

@endsection