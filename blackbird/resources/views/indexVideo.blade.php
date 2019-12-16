@extends('layout')
@section('css')
  <link rel="stylesheet" href="/css/style.css">
  <link rel="stylesheet" href="/css/videohome.css">
  <link rel="stylesheet" href="css/fontawesome//css/all.css">
  <link rel="shortcut icon" href="../favicon.ico">
  <link rel="stylesheet" type="text/css" href="/css/demo.css" />
  <link rel="stylesheet" type="text/css" href="/css/common.css" />
  <link rel="stylesheet" type="text/css" href="/css/style4.css" />
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css' />
  <script type="text/javascript" src="js/modernizr.custom.79639.js"></script>
@endsection
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
      @section('title')
        DigiBurger
      @endsection
      <div class="vid-container-father">
        <div class="vid-header">
        <div class="fullscreen-video">
          <video autoplay muted loop>
            <source src="/img/burger2.mp4" type="video/mp4">
          </video>
        </div>
      </div>
<div class="post-video">
  <h1 id="ver-mas">NUESTRAS BURGERS</h1>
  {{-- @foreach($prod as $producto)
    <section class="productos">
      <article>
        <div class="photo-container">
          <img class="foto" src="/storage/{{$producto->imagen}}" alt="">
          <a class="ver-categoria" href="">{{$producto->nombre}}</a>
        </div>
      </article>
    </section>
  @endforeach --}}
</div>
