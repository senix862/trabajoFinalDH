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
  <form class="" action="" method="post" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="form-group">
      <label for="nombre">Producto:</label>
      <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre')}}">
      @error('nombre')
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
      <label for="stock">Stock: </label>
      <input type="number" min="0" step="any" class="form-control" id="stock" name="stock"  value="{{old('stock')}}">
      @error('stock')
          {{ $message }}
      @enderror
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria: </label>
      <select class="form-control" name="categoria_id" id="categoria_id">
        <option value="">Elije una</option>
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

    <a class="btn btn-secondary" href="/movies/">Volver</a>
    <button type="submit" class="btn btn-primary">Guardar</button>
  </form>
@endsection
