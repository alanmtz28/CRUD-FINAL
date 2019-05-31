<div class="form-group">
<label for="Nombre" class="control-label">{{'Nombre'}}</label>
<input type="text" class="form-control {{$errors->has('Nombre')?'is-invalid':''}}", name="Nombre" id="Nombre"
value="{{ isset($cliente->Nombre)?$cliente->Nombre:old('Nombre')}} ">


{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
<label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoPaterno')?'is-invalid':''}}", name="ApellidoPaterno" id="ApellidoPaterno" 
value="{{ isset($cliente->ApellidoPaterno)?$cliente->ApellidoPaterno:old('ApellidoPaterno')}} ">

{!! $errors->first('ApellidoPaterno','<div class="invalid-feedback">:message</div>') !!}


</div>

<div class="form-group">
<label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
<input type="text" class="form-control {{$errors->has('ApellidoMaterno')?'is-invalid':''}}", name="ApellidoMaterno" id="ApellidoMaterno" 
value="{{ isset($cliente->ApellidoMaterno)?$cliente->ApellidoMaterno:old('ApellidoMaterno')}} ">

{!! $errors->first('ApellidoMaterno','<div class="invalid-feedback">:message</div>') !!}

</div>

<div class="form-group">
<label for="Telefono" class="control-label">{{'Telefono'}}</label>
<input type="text" class="form-control {{$errors->has('Telefono')?'is-invalid':''}}", name="Telefono" id="Telefono" 
value="{{ isset($cliente->Telefono)?$cliente->Telefono:old('Telefono')}} ">
{!! $errors->first('Telefono','<div class="invalid-feedback">:message</div>') !!}


</div>

<div class="form-group">
<label for="Correo" class="control-label">{{'Correo'}}</label>
<input type="email" class="form-control {{$errors->has('Correo')?'is-invalid':''}}", name="Correo" id="Correo" 
value="{{ isset($cliente->Correo)?$cliente->Correo:old('Correo')}} ">

{!! $errors->first('Correo','<div class="invalid-feedback">:message</div>') !!}


</div>

<input type="submit" class="btn btn-success" value="{{$Modo== 'crear' ? 'Agregar': 'Modificar'}}">
<a class="btn btn-primary" href="{{ url('clientes')}}">Regresar</a>