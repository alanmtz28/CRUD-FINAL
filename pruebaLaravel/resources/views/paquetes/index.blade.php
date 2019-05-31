
@extends('layouts.app')
@section('content')

<table class="table table-light table-hover">

    <thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Description</th>
			<th>Foto1</th>
			<th>Foto2</th>
			<th>Foto3</th>
			<th>Precio</th>
			<th>Acciones</th>
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
			<td>

				<a href="{{ url('/paquetes/'.$paquete->id.'/edit') }}">
					Editar
				</a>
			 |

			<form method="post" action="{{ url('/paquetes/'.$paquete->id) }}">
					{{csrf_field() }}
					{{ method_field('DELETE') }}
					<button type="submit" onclick="return confirm('¿Borrar?');" >Borrar</button>
				</form>
			

			</td>
		</tr>
  @endforeach
	</tbody>

</table>
<a href="{{ url('paquetes/create')}}">Agreger Paquetes</a>
@endsection