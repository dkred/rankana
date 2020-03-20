@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Lista de productos	<a href="productos/create"><button type="buttton" class="btn btn-success float-right">Agregar Producto</button></a></h2>
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
      <th scope="col">Cantidad</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
  	@foreach($productos as $producto)
    <tr>
      <th scope="row">{{$producto->id_producto}}</th>
      <td>{{$producto->nombre}}</td>
      <td>{{$producto->stock}}</td>
      <td>
        
        <form action="{{route('productos.destroy',$producto->id_producto)}}" method="post">
          <a href="{{route('productos.show',$producto->id_producto)}}"><button class="btn btn-secondary" type="button">Ver</button></a>
          <a href="{{route('productos.edit',$producto->id_producto)}}"><button class="btn btn-primary" type="button">Editar</button></a>
          @csrf
          @method('DELETE')
            <button class="btn btn-danger" type="submit">Borrar</button>
        </form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>
    {{$productos->links()}}
</div>
@endsection