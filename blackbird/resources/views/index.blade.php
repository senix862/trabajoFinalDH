@extends('layout')

@section('css')
  <link rel="stylesheet" href="/css/style.css">
@endsection

@section('texto')
  Productos Destacados
@endsection

@section('main')
  @foreach($prod as $producto)
    <section class="productos">
      <article>
        <div class="photo-container">
          <img class="foto" src="/img/aros/arosZafiroAzul-art376.jpg" alt="art376">
          <a class="ver-categoria" href="">{{$producto->nombre}}</a>
        </div>
      </article>
  @endforeach
@endsection
