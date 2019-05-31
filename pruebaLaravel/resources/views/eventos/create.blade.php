@extends('layouts.app')

@section('content')
<div class="container">

@if(count($errors)>0)
<div class="alert alert-danger" role="alert">
    <ul>
    @foreach($errors->all() as $error)
    <li> {{ $error }} </li>

    @endforeach
    </ul>
</div>
@endif


Seccion para crear eventos

<form action="{{ url('/eventos')}}" method="post">
@csrf
@include('eventos.form', ['Modo'=>'crear'])
</form>
@endsection