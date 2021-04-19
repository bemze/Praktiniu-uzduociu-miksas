@extends('layout.main')
@section('body')

<h1>Atėmus iš skaičiaus {{$sk1}}  skaičių {{$sk2}} gauname</h1>

    @if(($sum) < 0)
    
    <h2 style="color:red;"> {{$sum}}</h2>

    @else

    <h2 style="color:green;"> {{$sum}}</h2>
    @endif
    @endsection

    @section('title') Atimtis @endsection