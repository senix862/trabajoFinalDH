@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/registro.css">
  @endsection

  @section('title')
    Agregar Producto
  @endsection

  @section('texto')
    Nuevo Producto
  @endsection

@section('main')
  <form class="" action="/products/nuevo" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="nombr">Hamburguesa:</label>
      <input type="text" class="form-control @error('nombr') is-invalid @enderror" id="nombr" name="nombr" value="{{old('nombr')}}">
      @error('nombr')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="precio">Precio:</label>
      <input type="number" min="1" step="any" class="form-control " id="precio" name="precio" value="{{old('precio')}}">
      @error('precio')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="descuento">Porcentaje de descuento: </label>
      <input type="number" min="0" step="any" class="form-control" id="descuento" name="descuento"  value="{{old('descuento')}}">
      @error('descuento')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="calorias">Calorias: </label>
      <input type="number" min="0" step="any" class="form-control" id="calorias" name="calorias"  value="{{old('calorias')}}">
      @error('calorias')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria: </label>
      <select class="form-control" name="categoria_id" id="categoria_id">
        <option value="">Elije una categoria</option>
    @foreach ($categorias as $categoria)
        <option value="{{$categoria->id}}" @if($categoria->id == old('categoria_id')) selected @endif>{{$categoria->nombre}}</option>
    @endforeach
      </select>
      @error('categoria_id')
          {{ $message }}
      @enderror
    </div>

    <div class="form-group">
      <label for="imagen">Imagen: </label>
      <input type="file" id="imagen" name="imagen">
      @error('imagen')
          {{ $message }}
      @enderror
    </div>

    <a class="btn btn-secondary" href="/blackbird">Volver</a>
    <button type="submit" class="btn btn-primary" >Guardar</button>
  </form>
  @php
  var_dump($errors->all());
  @endphp
@endsection
