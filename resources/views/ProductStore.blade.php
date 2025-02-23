<!-- SERGE MUNEZA -->

@extends('layout.layout')
@section('content')

<h1>Products in Store Page</h1>

<table>
    <thead>
        <tr>
            <td>Names</td>
            <td>Title</td>
            <td>Tin</td>
            <td>Stock</td>
        </tr>
    </thead>
    <tbody>
        @foreach ($stock as $stock)
            <tr>
                <td>{{$stock->name}}</td>
                <td>{{$stock->title}}</td>
                <td>{{$stock->tin}}</td>
                <td>{{$stock->stock}}</td>

                <td> <a href="{{route('deletestock',$stock->id)}}"> DELETE </a> </td>
                <td> <a href="{{route('editProductForm',$stock->id)}}"> Edit </a> </td>

            </tr>
            
        @endforeach
    </tbody>
</table>

@endsection