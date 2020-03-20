
@extends('layouts.app')

@section('content')

<div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">{{$producto->nombre}}</h1>
    <p class="lead">{{$producto->nombre_en}}</p>
  </div>
</div>
@endsection