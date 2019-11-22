@extends('layout')

  @section('css')
    <link rel="stylesheet" href="/css/registro.css">
  @endsection

  @section('title')
    Blackbird - Joyas y Bijouterie
  @endsection

  @section('texto')
    Registro
  @endsection

@section('main')
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="">
                  {{-- <div class="card-header">{{ __('Register') }}</div> --}}

                  <div class="">
                      <form method="POST" action="{{ route('register') }}" enctype="multipart/formdata">
                          @csrf
                            <label for="nombre">Nombre:</label>
                            <br>
                            <input type="text" name="nombre" value="{{old('nombre')}}">
                            <br>

                            <label for="apellido">Apellido:</label>
                            <br>
                            <input type="text" name="apellido" value="{{old('apellido')}}" >
                            <br>
                            <label for="pais">País:</label>
                            <br>
                            <select name="pais">
                              <option value="">seleccione un país</option>
                              <option
                              @foreach ($paises as $pais)
                                <option value="{{old('pais')}}">{{$pais->pais}}</option>
                            @endforeach
                            </select>
                            <br>
                            <label for="avatar">Subir foto de perfil</label>
                            <input type="file"  id="avatar" name="avatar">
                            <br>
                            <label for="date">Fecha de nacimiento:</label>
                            <br>
                            <input id="date" type="date" name="date" value="" >
                            <br>
                            <label for="email">E-mail:</label>
                            <br>
                            <input type="email" name="email" value="{{old('email')}}">
                            <br>
                            <label for="password">Contraseña:</label>
                            <br>
                            <input id="password" type="password" name="password" value="" >
                            <label for="password2">Repetir contraseña:</label>
                            <br>
                            <input id="password2" type="password" name="password2" value="" >
                            <br>
                            <br>
                            <input class="check" type="checkbox" name="terminos" value="1" > Acepto los <a href="#">Términos y condiciones</a>.
                            <br>
                            <input class="check" type="checkbox" name="newsletter" value=""> Deseo recibir ofertas por mail.
                            <br>
                            <button id="registro" type="submit" name="button">Registro</button>
                      </form>
  @endsection
