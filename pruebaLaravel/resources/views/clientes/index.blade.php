@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>

@endif

<a href="{{ url('clientes/create')}}" class= "btn btn-success" >Agregar Cliente</a>
<a href="{{ url('eventos/create')}}" class= "btn btn-success" >Agregar Evento</a>
<a href="{{ url('gastos/create')}}" class= "btn btn-success" >Agregar Gastos</a>
<br>
<br>
<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>

    @foreach($clientes as $cliente)
    <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $cliente->Nombre}} {{ $cliente->ApellidoPaterno}} {{ $cliente->ApellidoMaterno}} </td>
            <td>{{ $cliente->Telefono}}</td>
            <td>{{ $cliente->Correo}}</td>
            <td>
            
            <a class="btn btn-warning" href="{{ url ('/clientes/'.$cliente->id.'/edit') }}">
            Editar
            
            </a>

            <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#miModal_{{$cliente->id}}">
	        Abrir modal
        </button>

        
            
              
            
                <form action="{{ url ('/clientes/'.$cliente->id) }}" style="display:inline" method="post">
                @csrf

                {{ method_field('DELETE')}}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                
                
                </form>
             </td>
        </tr>
    </tbody>
    @endforeach
</table>


@foreach($clientes as $cliente)
<div class="modal fade" id="miModal_{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Editar</h4>
			</div>
			<div class="modal-body">
            <form id="formulario" method="POST" action="/edit-client">
            @csrf
            <input type="hidden" name="id" value="{{$cliente->id}}">
                <label for="Nombre" class="control-label">{{'Nombre'}}</label>
                <input type="text" value="{{$cliente->Nombre}}" name="Nombre"><br>
                <label for="ApellidoPaterno" class="control-label">{{'Apellido Paterno'}}</label>
                <input type="text" value="{{$cliente->ApellidoPaterno}}" name="ApellidoPaterno"><br>
                <label for="ApellidoMaterno" class="control-label">{{'Apellido Materno'}}</label>
                <input type="text" value="{{$cliente->ApellidoMaterno}}" name="ApellidoMaterno"><br>
                <label for="Telefono" class="control-label">{{'Telefono'}}</label>
				<input type="text" value="{{$cliente->Telefono}}" name="Telefono"><br>
                <label for="Correo" class="control-label">{{'Correo'}}</label>
                <input type="text" value="{{$cliente->Correo}}" name="Correo"><br>   
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" referencia="miModal_{{$cliente->id}}" data-dismiss="modal" class="btn btn-primary editClient"  id="btnagregar" >Modificar</button>  
            </form>
			</div>
            <div class="modal-footer">
        
      </div>
		</div>
	</div>
</div>
@endforeach


{{ $clientes->links()}}

</div>
@endsection
@push('ajax')
<script src="{{asset('js/ajax.js')}}"></script>
@endpush