<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
use App\Categoria;

class ProductosController extends Controller
{
  public function listado(){
    $prod = Producto::all();

    return view('index', compact('prod'));
  }

  public function detalle($id){
    $prod = Producto::find($id);

    return view('detalleProd', compact('prod'));
  }


  public function new()
  {
      $categorias = Categoria::all();
      return view('addProd', compact('categorias'));
  }

  public function agregar(Request $req){
    // $imagen = $data['imagen']->store('public');
    // $imagen= basename($imagen);
    $reglas = [
      "nombre" => "string|required",
      "precio" => "numeric|required",
      "descuento" => "numeric",
      "stock" => "integer|min:1",
      "categoria" => "integer",
      "imagen"=> "file"
    ];
    $mesagge= [
      
    ];
    $this->validate($req, $reglas, $mesagge);

    $prodNuevo = new Producto;
    $imagen = $req->file('imagen')->store('public');
    $imagenF= basename($imagen);

    $prodNuevo->nombre = $req["nombre"];
    $prodNuevo->precio = $req["precio"];
    $prodNuevo->descuento = $req["descuento"];
    $prodNuevo->stock = $req["stock"];
    $prodNuevo->categoria_id = $req["categoria_id"];
    $prodNuevo->imagen = $imagenF;

    $prodNuevo->save();

    return redirect("/detalleProd");
  }
}
