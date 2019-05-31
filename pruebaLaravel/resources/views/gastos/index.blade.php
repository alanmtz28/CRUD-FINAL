@extends('layouts.app')

@section('content')
<a href="{{ url('gastos/create')}}">Agreger Gasto Nuevo</a>
<table class="table table-light table-hover">

    <thead class="thead-light">
		<tr>
			<th>#</th>
			<th>Concepto</th>
			<th>Monto</th>
			<th>Fecha</th>
		</tr>
	</thead>

	<tbody>
  @foreach ($gastos as $gasto)
		<tr>
			<td>{{$loop->iteration}}</td>
			<td>{{ $gasto->concepto}}</td>
			<td>{{ $gasto->monto}}</td>
			<td>{{ $gasto->fecha}}</td>
		</tr>
  @endforeach
	</tbody>

</table>
@endsection