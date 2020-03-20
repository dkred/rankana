@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Lista de Artistas	<a href="artistas/create"><button type="buttton" class="btn btn-success float-right">Agregar Artista</button></a></h2>
  <h6>
    @if($search)
    <div class="alert alert-primary" role="alert">
    Tu resultado de busqueda  {{$search}} es :
    </div>
    @endif
  </h6>
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">N Piezas</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($artistas as $artista)
    <tr>
      <th scope="row">{{$artista->id_artista}}</th>
      <td>{{$artista->nombre_artista}}</td>
      <td>{{$artista->n_piezas}}</td>
      <td>
        
        <form action="{{route('artistas.destroy',$artista->id_artista)}}" method="post">
          <a href="{{route('artistas.show',$artista->id_artista)}}"><button class="btn btn-secondary" type="button">Ver</button></a>
          <a href="{{route('artistas.edit',$artista->id_artista)}}"><button class="btn btn-primary" type="button">Editar</button></a>
          @csrf
          @method('DELETE')
            <button class="btn btn-danger" type="submit">Borrar</button>
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
    {{$artistas->links()}}
</div>
@endsection