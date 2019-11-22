<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;

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

  public function agregar(Request $req){

    $reglas = [
      "nombre" => "string|unique|required",
      "precio" => "numeric|required",
      "descuento" => "numeric",
      "stock" => "integer|min:1",
      "categoria" => "integer"
    ];

    $this->validate($req, $reglas);

    $prodNuevo = new Producto();

    $prodNuevo->nombre = $req["nombre"];
    $prodNuevo->precio = $req["precio"];
    $prodNuevo->descuento = $req["descuento"];
    $prodNuevo->stock = $req["stock"];
    $prodNuevo->categoria_id = $req["categoria_id"];

    $prodNuevo->save();

    return redirect("/detalleProd");
  }
}
