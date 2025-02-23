<!-- SERGE MUNEZA -->

@extends('layout.layout')

@section('content')


<h1>REGISTRATION PAGE</h1>

<form method="post" action="{{ route('userRegisterForm') }}">
    @csrf 
<p> Full name: <input type="text" name="name"/> </p> 
<p> Age: <input type="number" name="age"/> </p>
<p> Email: <input type="email" name="email"/> </p>
<P> Password: <input type="password" name="password"/> </p>
<p> <input type="submit" value="REGISTER"/> </p>

</form> 

<a href="{{route('showLoginForm')}}" > Go To Login Page </a> 

@endsection 