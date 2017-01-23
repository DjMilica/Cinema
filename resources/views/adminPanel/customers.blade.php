@extends('layouts.master')
@section('title')
    All customers
@endsection
@include('includes.headerForAdmin')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                @include('adminPanel.menuForEveryPage')
            </div>
            <div class="col-md-9">
                <h2>Your customers:</h2>
                <h3>           </h3>
                <h3>           </h3>
                @foreach($users as $user)
                    @if(!$user->isAdmin())
                        <div class="col-sm-6 col-md-4">
                            <div class="thumbnail">
                                <div class="caption">
                                    <p class="description">Name: {{$user->first_name}} {{$user->last_name}}</p>
                                    <p class="description">email: {{$user->email}} </p>
                                    <?php $res = DB::table('reservations')
                                            ->where('user_id',$user->id)
                                            ->select(DB::raw('count(*) as total'))
                                            ->get();
                                    $haveRes = $res[0]->total;
                                    if($haveRes==0) $disabled = 'disabled';
                                    else $disabled = ''?>
                                    <div class="clearfix">
                                        <a href="{{url('/admin/customers', $user->id)}}" class="btn btn-success pull-right {{$disabled}}" role="button">Look for reservations</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection