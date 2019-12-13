@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/style.css">
  @endsection

  @section('title')
    Detalle
  @endsection

  @section('texto')
    En Detalle
  @endsection

  @section('main')

              <h2>{{$producto->nombre}}</h2>
              <img src="/storage/{{$producto->imagen}}" alt="" width="100%">
                  <div class="form-group">
                    <label for="rating">precio</label>
                    {{$producto->rating}}
                  </div>
                  <div class="form-group">
                    <label for="awards">Calorias</label>
                    {{$producto->calorias}}
                  </div>
                  <div class="form-group">
                    <label for="length">Descuento:</label>
                    {{$producto->descuento}}
                  </div>

                  <div class="form-group">
                    <label for="genre_id">categoria:</label>

                    {{ $producto->getCategoriaName() }}
                  </div>

                  <div class="">
                      <form class="" action="/productos/{{$producto->id}}" method="post">
                          @csrf
                          @method('delete')
                          <a class="btn btn-secondary" href="/productos/">Volver</a>

                          <a class="btn btn-success" href="/productos/{{$producto->id}}/edit">Editar</a>

                          <button type="submit" class="btn btn-danger" name="button">Eliminar</button>
                      </form>
                  </div>
  @endsection
