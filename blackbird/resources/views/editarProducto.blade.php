@extends('layout')

@section('main')

<div class="row">
<div class="col-md-6 offset-md-3">
  <article class="nuevas" id="peliculas">
      <div class="peliculas">

            <h2>Modificación de hamburgesa</h2>
            <form method="post" action="/productos/{{$producto->id}}" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="form-group">
                  <label for="nombre">Nombre: </label>
                  <input type="text" class="form-control @error('nombre') is-invalid @enderror" id="nombre" name="nombre" value="{{old('nombre', $producto->nombre)}}">
                  @error('nombre')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="precio">Precio: </label>
                  <input type="text" class="form-control " id="precio" name="precio" value="{{old('precio', $producto->precio)}}">
                  @error('precio')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="calorias">Calorias: </label>
                  <input type="text" class="form-control" id="calorias" name="calorias"  value="{{old('calorias', $producto->calorias)}}">
                  @error('calorias')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="descuento">Descuento: </label>
                  <input type="text" class="form-control" id="descuento" name="descuento"  value="{{old('descuento', $producto->descuento)}}">
                  @error('descuento')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="categoria_id">Genero</label>
                  <select class="form-control" name="categoria_id" id="categoria_id">
                    <option value="">Elije uno</option>
                @foreach ($categorias as $categoria)
                    <option value="{{$categoria->id}}" @if($categoria->id == old('categoria_id', $producto->categoria_id)) selected @endif>{{$categoria->nombre}}</option>
                @endforeach
                  </select>
                  @error('categoria_id')
                      {{ $message }}
                  @enderror
                </div>

                <div class="form-group">
                  <label for="imagen">Imagen: </label>
                  <img src="/storage/{{$producto->imagen}}" alt="" width="100%">
                  Para cambiar seleccione un nuevo archivo
                  <input type="file" id="imagen" name="imagen">
                  @error('imagen')
                      {{ $message }}
                  @enderror
                </div>
                <a class="btn btn-secondary" href="/productos/">Volver</a>
                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

      </div>

  </article>
</div>
</div>

@endsection
