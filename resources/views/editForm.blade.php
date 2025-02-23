@extends('layout.layout')
@section('content')


<h1>PRODUCT PAGE</h1>

<form method="post" action="{{ route('updateProductForm', $stock->id) }}" enctype="multipart/form-data">
    @csrf 

    <p> Product Name: <input type="text" name="name" value="{{ $stock->name }}"/> </p> 
    <p> Product Title: <input type="text" name="title" value="{{ $stock->title }}"/> </p>
    <p> Tin Number: <input type="number" name="tin" value="{{ $stock->tin }}"/> </p>
    <p> Stock: <input type="number" name="stock" value="{{ $stock->stock }}"/> </p>
    
    <p> <input type="submit" value="UPDATE PRODUCT"/> </p>
</form>


@endsection