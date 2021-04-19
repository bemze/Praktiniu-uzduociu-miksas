@extends('layout.main')
@section('body')

<h1>Sumavimas su forma</h1>
<div>suma: {{$r}}</div>
<form action="{{route('calc')}}" method="post">
X: <input type="text" name="x">
Y: <input type="text" name="y">
<button type="submit">Count</button>
@csrf

</form>

    

    @endsection


    @section('title') Sumavimas @endsection