<!-- SERGE MUNEZA -->

@extends('layout.layout')
@section('content')

<h1>PRODUCT PAGE</h1>

<form method="post" action="{{route('useProductForm')}}" enctype="multipart/form-data">
    @csrf 
<p> Product Name: <input type="text" name="name"/> </p> 
<p> Product Title: <input type="text" name="title"/> </p>
<p> Tin Number: <input type="number" name="tin"/> </p>
<P> Stock: <input type="number" name="stock"/> </p>

<p> <input type="submit" value="SAVE PRODUCT IN STORE"/> </p>

</form> 

@endsection