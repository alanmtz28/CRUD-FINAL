@extends('layouts.app')

@section('content')
<form action="{{url('/gastos')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
<label for="Concepto">{{'Concepto'}}</label>	
<input type="char" name="Concepto" id="Concepto" value="">
<br/>
<label for="Monto">{{'Monto'}}</label>	
<input type="text" name="Monto" id="Monto" value="">
<br/>
<label for="Fecha">{{'Fecha'}}</label>	
<input type="date" name="Fecha" id="Fecha" value="">
<br/>


<input type="submit" value="Agregar Gasto">

<a href="{{ url('gastos')}}">Regresar</a>
</form>
@endsection