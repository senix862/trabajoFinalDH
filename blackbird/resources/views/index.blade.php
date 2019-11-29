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
