@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/style.css">
  @endsection

  @section('title')
    Blackbird - Joyas y Bijouterie
  @endsection

  @section('texto')
    Productos Destacados
  @endsection

@section('main')
  <iframe  height="100%" src="https://www.youtube.com/embed/y8zgASDGeo4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  @foreach($prod as $producto)
    <section class="productos">
      <article>
        <div class="photo-container">
          <img class="foto" src="/storage/{{$producto->imagen}}" alt="">
          <a class="ver-categoria" href="">{{$producto->nombre}}</a>
        </div>
      </article>
  @endforeach
@endsection
