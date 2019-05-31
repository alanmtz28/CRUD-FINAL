

<form action="{{url('/paquetes')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
<label for="Description">{{'Description'}}</label>	
<input type="text" name="Description" id="Description" value="">
<br/>
<label for="Foto1">{{'Foto1'}}</label>	
<input type="file" name="Foto1" id="Foto1" value="">
<br/>
<label for="Foto2">{{'Foto2'}}</label>	
<input type="file" name="Foto2" id="Foto2" value="">
<br/>
<label for="Foto3">{{'Foto3'}}</label>	
<input type="file" name="Foto3" id="Foto3" value="">
<br/>
<label for="Precio">{{'Precio'}}</label>	
<input type="float" name="Precio" id="Precio" value="">
<br/>


<input type="submit" value="Agregar">

<a href="{{ url('paquetes')}}">Regresar</a>
</form>