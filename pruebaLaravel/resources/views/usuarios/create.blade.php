Seccion para crear usuarios

<form action="{{url('/usuarios')}}" method="post" enctype="multipart/form-data">
	{{ csrf_field() }}
<label for="Nombre">{{'Nombre'}}</label>	
<input type="text" name="Nombre" id="Nombre" value="">
<br/>
<label for="Email">{{'Email'}}</label>	
<input type="email" name="Email" id="Email" value="">
<br/>
<label for="Password">{{'Password'}}</label>	
<input type="text" name="Password" id="Password" value="">
<br/>
<label for="Rol">{{'Rol'}}</label>	
<select name="Rol" id="Rol" class="form-control">
	
	</select>
<input type="text" name="Rol" id="Rol" value="">
<br/>
<input type="submit" value="Agregar">
</form>


