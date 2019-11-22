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
  <form class="" action="/addProd" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

    <label for="nombre">Nombre del producto:</label>
    <br>
    <input type="text" name="nombre" value="{{old("nombre")}}">
    <br>
    <label for="categoria">Categoría:</label>
    <br>
    <input type="text" name="categoria" value="{{old("categoria")}}">
    <br>
    <label for="precio">Precio:</label>
    <br>
    <input type="number" name="precio" value="{{old("precio")}}" >
    <br>
    <label for="fotoProd">Imagen:</label>
    <input type="file"  id="fotoProd" name="fotoProd">
    <br>
    <label for="stock">Stock:</label>
    <br>
    <input id="stock" type="number" name="stock" value="{{old("stock")}}">
    <br>
    <label for="description">Descripción(máx 200 caracteres):</label>
    <br>
    <input type="text" name="description" value="{{old("description")}}" >
    <br>
    <input class="check" type="checkbox" name="oferta" value="1"> Está en oferta.
    <br>
    <label for="descuento">Porcentaje de descuento:</label>
    <br>
    <input id="descuento" type="number" name="descuento" value="{{old("descuento")}}">
    <br>
    <label for="modelo">Modelo:</label>
    <br>
    <input id="modelo" type="text" name="modelo" value="{{old("modelo")}}">
    <br>
    <label for="descuento">Material:</label>
    <br>
    <input id="material" type="text" name="material" value="{{old("material")}}">
    <br>
    <label for="descuento">Tipo de Piedra:</label>
    <br>
    <input id="tipoPiedra" type="text" name="tipoPiedra" value="{{old("tipoPiedra")}}">
    <br>
    <button id="cargarProd" type="submit" name="button">Cargar Producto</button>
</form>
@endsection
