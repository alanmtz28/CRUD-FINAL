<div class="form-group">
<label for="Fecha" class="control-label">{{'Fecha'}}</label>
<input type="date" class="form-control {{$errors->has('Fecha')?'is-invalid':''}}", name="Fecha" id="Fecha"
value="{{ isset($evento->Fecha)?$evento->Fecha:old('Fecha')}} ">


{!! $errors->first('Nombre','<div class="invalid-feedback">:message</div>') !!}
</div>


<div class="form-group">
<label for="Tipo" class="control-label">{{'Tipo'}}</label>
<input type="text" class="form-control {{$errors->has('Tipo')?'is-invalid':''}}", name="Tipo" id="Tipo" 
value="{{ isset($evento->Tipo)?$evento->Tipo:old('Tipo')}} ">

{!! $errors->first('Tipo','<div class="invalid-feedback">:message</div>') !!}


</div>
<input type="submit" class="btn btn-success" value="{{$Modo== 'crear' ? 'Agregar': 'Modificar'}}">
<a class="btn btn-primary" href="{{ url('eventos')}}">Regresar</a>