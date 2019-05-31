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


Seccion para crear clientes

<form action="{{ url('/clientes')}}" method="post">
@csrf
@include('clientes.form', ['Modo'=>'crear'])
</form>
@endsection