@extends('layout.layout')
@section('content')

@auth 
    <h1>Welcome back : {{auth()->user()->name}} </h1>

    <a href="{{ route('showLoginForm')}}"> Logout </a> <br>
@endauth
<h1>YOU ARE WELCOME</h1>

@endsection

