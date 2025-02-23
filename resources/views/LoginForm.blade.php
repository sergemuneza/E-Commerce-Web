@extends('layout.layout')
@section('content')

<h1>LOGIN PAGE</h1>

<form method="post" action="{{ route('userLoginForm') }}">
    @csrf 
<p> Email: <input type="email" name="email"/> </p>
<P> Password: <input type="password" name="password"/> </p>
<p> <input type="submit" value="LOGIN"/> </p>

</form> 

 <a href="{{route('showRegisterForm')}}" > Go To Registration </a>  

@endsection 