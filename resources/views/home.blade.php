@extends('layouts.main_layout')

@section('content')
    <link rel="stylesheet" href="{{asset('css/profile.css')}}">







<div class="profile-block">
    <div class="panel text-center">
        <div class="user-heading">
            <h1>{{Auth::user()->name}}</h1>
            <p>{{Auth::user()->email}}</p>
            <p>{{Auth::user()->phone}}</p>
        </div>
        <ul class="nav nav-pills nav-stacked d-block">
            <li class="active"><a href="#"><i class="fa fa-user"></i>Профіль</a></li>
            <li ><a href="/home/profile_change"><i class="fa fa-pencil-square-o"></i>Редагувати профіль</a></li>
            <li ><a href="/home/password_change"><i class="fa fa-pencil-square-o"></i>Змінити пароль</a></li>
            <li onclick="location.href='/logout'"><a ><i class="fa fa-sign-out"></i>Вихід</a></li>
        </ul>
    </div>
</div>
@endsection
