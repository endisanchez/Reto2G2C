<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class TiendasController extends Controller
{
  public function inicio()
  {
      $tiendas = App\Models\tiendas::all();
      return view('productos', compact('tiendas'));
  }
}
