
@extends('layouts.app')
@section('content')
<form action="{{ url('/paquetes/' . $paquete->id) }} " method="post" enctype="multipart/form-data" >
	{{ csrf_field() }}
	{{ method_field('PATCH') }}
	
<label for="Description">{{'Description'}}</label>	
<input type="text" name="Description" id="Description" value="{{$paquete->description}}">
<br/>
<label for="Foto1">{{'Foto1'}}</label>	
<br/>
<img src="{{ asset('storage').'/'.$paquete->foto1}}" alt="" width="200">
<br/>
<input type="file" name="Foto1" id="Foto1" value="">
<br/>
<label for="Foto2">{{'Foto2'}}</label>	
<br/>
<img src="{{ asset('storage').'/'.$paquete->foto2}}" alt="" width="200"><br/>
<input type="file" name="Foto2" id="Foto2" value="">
<br/>
<label for="Foto3">{{'Foto3'}}</label>	
<br/>
<img src="{{ asset('storage').'/'.$paquete->foto3}}" alt="" width="200">
<br/>
<input type="file" name="Foto3" id="Foto3" value="">
<br/>
<label for="Precio">{{'Precio'}}</label>	
<input type="float" name="Precio" id="Precio" value="{{$paquete->precio}}">
<br/>

<input type="submit" value="Modificar">
<a href="{{ url('paquetes')}}">Regresar</a>
</form>

@endsection