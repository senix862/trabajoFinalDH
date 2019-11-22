@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/style.css">
  @endsection

  @section('title')
    Detalle
  @endsection

  @section('texto')
    Detalle del Producto
  @endsection

@section('main')
    <section class="productos">
      <article>
        <div class="photo-container">
          <img class="foto" src="/img/aros/arosZafiroAzul-art376.jpg" alt="art376">
          <h2>{{$prod->nombre}}</h2>
          <p>Precio: ${{$prod->precio}}</p>
          <p>Stock: {{$prod->stock}}</p>
        </div>
      </article>
@endsection
