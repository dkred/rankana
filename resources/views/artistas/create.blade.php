@extends('layouts.app')

@section('content')
<div class="container">
	<h2>Crear	Artista</h2>
 <div class="card-body">
                    <form method="POST" action ="{{url('admin/artistas')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row">
                            <label for="nombre_artista" class="col-md-4 col-form-label text-md-right">Nombre</label>
                            <div class="col-md-6">
                                <input id="nombre_artista" type="text" class="form-control" name="nombre_artista" value="nombre_artista " required autocomplete="nombre_artista" autofocus>
                            </div>
                        </div>
                         
                       
                        <div class="form-group row">
                            <label for="Descripcion_artista" class="col-md-4 col-form-label text-md-right">Descripcion_artista</label>
                            <div class="col-md-6">
                                <input id="Descripcion_artista" type="text" class="form-control" name="descripcion_artista" value="Descripcion_artista " required autocomplete="descripcion" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="descripcion_artista_en" class="col-md-4 col-form-label text-md-right">Descripcion_artista_en</label>
                            <div class="col-md-6">
                                <input id="Descripcion_artista_en" type="text" class="form-control" name="descripcion_artista_en" value="Descripcion_artista_en" required autocomplete="Descripcion_artista_en" autofocus>
                            </div>  
                        </div>
                        <div class="form-group row">
                            <label for="ciudad_artista" class="col-md-4 col-form-label text-md-right">ciudad_artista</label>
                            <div class="col-md-6">
                                <input id="ciudad_artista" type="text" class="form-control" name="ciudad_artista" value="ciudad_artista del Producto" required autocomplete="ciudad_artista" autofocus>
                            </div>
                        </div>
                       
                         <div class="form-group row">
                            <label for="tecnica" class="col-md-4 col-form-label text-md-right">tecnica</label>
                            <div class="col-md-6">
                                <input id="tecnica" type="text" class="form-control" name="tecnica" value="tecnica" required autocomplete="tecnica" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="tecnica_en" class="col-md-4 col-form-label text-md-right">tecnica_en</label>
                            <div class="col-md-6">
                                <input id="tecnica_en" type="text" class="form-control" name="tecnica_en" value="tecnica_en" required autocomplete="tecnica_en" autofocus>
                            </div>
                        </div>
                       
                        <div class="form-group row">
                            <label for="img_artista" class="col-md-4 col-form-label text-md-right">Imagen Artista</label>
                            <div class="col-md-6">
                                <input id="img_artista" type="file" class="form-control" name="img_artista"  >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fondo_artista" class="col-md-4 col-form-label text-md-right">Fondo Artista</label>
                            <div class="col-md-6">
                                <input id="fondo_artista" type="file" class="form-control" name="fondo_artista"  >
                            </div>
                        </div>
                         <div class="form-group row">
                            <label for="id_categoria" class="col-md-4 col-form-label text-md-right">Categoria</label>
                            <div class="col-md-6">
                                 <select class="form-control" name="id_categoria" >
                                    @foreach($categorias as $cat)
                                    <option  value="{{$cat->id_categoria}}">{{$cat->nombre_categoria}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
</div>
@endsection