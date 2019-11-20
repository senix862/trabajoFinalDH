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
}
