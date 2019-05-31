@extends('layouts.app')

@section('content')
<div class="container">


@if(Session::has('Mensaje'))

<div class="alert alert-success" role="alert">
    {{ Session::get('Mensaje') }}
</div>

@endif

<a href="{{ url('eventos/create')}}" class= "btn btn-success" >Agregar Evento</a>
<a href="{{ url('clientes')}}" class= "btn btn-success" >Agregar cliente</a>

<br>
<br>
<table class="table table-light table-hover">

    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Fecha</th>
            <th>Tipo</th>
            <th>Cliente</th>
            <th>Acciones</th>
        </tr>
    </thead>


    <tbody>

    @foreach($eventos as $evento)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{ $evento->Fecha}}</td>
            <td>{{ $evento->Tipo}}</td>
            <td></td>
            
            <td>
            <a class="btn btn-warning" href="{{ url ('/eventos/'.$evento->id.'/edit') }}">
            Editar
            
            </a>
              
            
                <form action="{{ url ('/eventos/'.$evento->id) }}" style="display:inline" method="post">
                @csrf

                {{ method_field('DELETE')}}
                <button class="btn btn-danger" type="submit" onclick="return confirm('¿Borrar?');">Borrar</button>
                
                
                </form>
             </td>
        </tr>
    </tbody>
    @endforeach
</table>

{{ $eventos->links()}}
</div>
@endsection