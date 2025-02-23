<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-COMMERCE WEB</title>
</head>
<body>

@if ($errors->any())
@foreach($errors->all() as $error)
<li> {{ $error }} </li>
@endforeach
@endif

@if (session('message')) 
<h1> 
    {{session('message')}}
</h1>
@endif


<p>
 <a href="{{route('showHomePage')}}" > HOME </a>   
</p>

<p>
 <a href="{{route('showProductStore')}}" > PRODUCTS IN STOCK </a>   
</p>

@yield('content')

</head>
</html>