@extends('layout.main')
@section('body')

<h1>Padalinus skaičių {{$sk1}} iš skaičiaus {{$sk2}} yra</h1>

@if($sk2 ==0)

<h2 style="color:red;">Dalyba iš 0 negalima</h2>
@else
<h2 style="color:green;"> {{$sk1/$sk2}}</h2>



@endif

@endsection
@section('title') Dalyba @endsection