Inicio paquetes hola
<a href="{{ url('bienvenida/inicio')}}">Regresar</a>
<table class="table table-light table-hover">

    <thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Description</th>
			<th>Foto1</th>
			<th>Foto2</th>
			<th>Foto3</th>
			<th>Precio</th>
			
		</tr>
	</thead>

	<tbody>
  @foreach ($paquetes as $paquete)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $paquete->description}}</td>
			<td>
				<img src="{{ asset('storage').'/'.$paquete->foto1}}" alt="" width="200">
			</td>
			<td>
				<img src="{{ asset('storage').'/'.$paquete->foto2}}" alt="" width="200">
			</td>
			<td>
				<img src="{{ asset('storage').'/'.$paquete->foto3}}" alt="" width="200">
			</td>
			<td>{{ $paquete->precio}}</td>
		</tr>
  @endforeach
	</tbody>

</table>
