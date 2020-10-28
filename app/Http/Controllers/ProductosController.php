<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class ProductosController extends Controller
{
    public function inicio()
    {

        $productos = App\Models\productos::all();
        $tiendas = App\Models\tiendas::all();
        return view('productos', compact('productos','tiendas'));

    }

    //SELECT * FROM productos INNER JOIN tiendas_has_productos ON productos.id = tiendas_has_productos.productos_id WHERE tiendas_id = 1;

    static function productosPorTienda($idtienda) {
      $productosTienda = App\Models\productos::select("SELECT * FROM productos INNER JOIN tiendas_has_productos ON productos.id = tiendas_has_productos.productos_id WHERE tiendas_id = $idtienda;");
      return view('productos', compact('productosTienda'));
    }

}
