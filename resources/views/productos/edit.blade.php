@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Editar  Producto</h2>
 <div class="card-body">
                    <form method="POST" action ="{{route('productos.update',$producto->id_producto)}}">
                        @method('PATCH')
                        @csrf

                        <div class="form-group row">
                            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('nombre') }}</label>
                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" value="{{$producto->nombre}}" required  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="nombre_en" class="col-md-4 col-form-label text-md-right">Nombre de Producto_en</label>
                            <div class="col-md-6">
                                <input id="nombre_en" type="text" class="form-control" name="nombre_en" value="{{$producto->nombre_en}}" required  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="precio" class="col-md-4 col-form-label text-md-right">Precio</label>
                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control" name="precio" value="{{$producto->precio}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion" class="col-md-4 col-form-label text-md-right">Descripcion</label>
                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" value="{{$producto->descripcion}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion_en" class="col-md-4 col-form-label text-md-right">Descripcion_en</label>
                            <div class="col-md-6">
                                <input id="descripcion_en" type="text" class="form-control" name="descripcion_en" value="{{$producto->descripcion_en}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="materiales" class="col-md-4 col-form-label text-md-right">Materiales</label>
                            <div class="col-md-6">
                                <input id="materiales" type="text" class="form-control" name="materiales" value="{{$producto->materiales}}" required  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="materiales_en" class="col-md-4 col-form-label text-md-right">Materiales Ingles</label>
                            <div class="col-md-6">
                                <input id="materiales_en" type="text" class="form-control" name="materiales_en" value="{{$producto->materiales_en}}" required  autofocus>
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="dimension" class="col-md-4 col-form-label text-md-right">Dimension</label>
                            <div class="col-md-6">
                                <input id="dimension" type="text" class="form-control" name="dimension" value="{{$producto->dimension}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="peso" class="col-md-4 col-form-label text-md-right">peso</label>
                            <div class="col-md-6">
                                <input id="peso" type="text" class="form-control" name="peso" value="{{$producto->peso}}" required autocomplete="peso" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="origen" class="col-md-4 col-form-label text-md-right">origen</label>
                            <div class="col-md-6">
                                <input id="origen" type="text" class="form-control" name="origen" value="{{$producto->origen}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="stock" class="col-md-4 col-form-label text-md-right">stock</label>
                            <div class="col-md-6">
                                <input id="stock" type="text" class="form-control" name="stock" value="{{$producto->stock}}" required  autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img_producto" class="col-md-4 col-form-label text-md-right">Imagen 1: {{$producto->img_producto}}</label>
                            <div class="col-md-6">
                                <input id="img_producto" type="file" class="form-control" name="img_producto"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img2" class="col-md-4 col-form-label text-md-right">Imagen 2: {{$producto->img_producto2}}</label>
                            <div class="col-md-6">
                                <input id="img_producto2" type="file" class="form-control" name="img_producto2"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img3" class="col-md-4 col-form-label text-md-right">Imagen 3: {{$producto->img_producto3}}</label>
                            <div class="col-md-6">
                                <input id="img_producto3" type="file" class="form-control" name="img_producto3"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img3" class="col-md-4 col-form-label text-md-right">Autor</label>
                            <div class="col-md-6">
                                <select class="form-control" name="id_autor">
                                    @foreach($artistas as $art)
                                    @if($producto->id_artista == $art->id_artista)  
                                    <option value="{{$art->id_artista}}" selected="">{{$art->nombre_artista}}</option>
                                    @else
                                    <option value="{{$art->id_artista}}">{{$art->nombre_artista}}</option>
                                    @endif
                                     @endforeach
                                </select>
                              
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="img3" class="col-md-4 col-form-label text-md-right">Categoria</label>
                            <div class="col-md-6">
                                 <select class="form-control" name="id_categoria" >
                                    @foreach($categorias as $cat)
                                    @if($producto->id_categoria == $cat->id_categoria)
                                    
                                    <option value="{{$cat->id_categoria}}" selected="">{{$cat->nombre_categoria}}</option>
                                    @else
                                    <option  value="{{$cat->id_categoria}}">{{$cat->nombre_categoria}}</option>
                                    @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Actualizar
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection