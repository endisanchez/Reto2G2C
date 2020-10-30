<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class productosController extends Controller
{
    public function inicio()
    {
        $productos = App\Models\productos::all();
        $tiendas = App\Models\tiendas::all();
        return view('productos', compact('productos','tiendas'));
    }

    static function productosPorTienda(Request $post)
    {
      $name = $post->input('seleccionarTienda');
      $sql = "SELECT * FROM productos INNER JOIN tiendas_has_productos ON productos.id=tiendas_has_productos.productos_id WHERE tiendas_id=$post";
      $productos = App\Models\productos::all();
      $tiendas = App\Models\tiendas::all();
      $prodTienda = App\Models\productos::select($sql);
      return view('productos')->with('prodTienda', $prodTienda)->with('productos', $productos)->with('tiendas', $tiendas);
    }

    public function admin()
    {
        $admins = App\Models\productos::all();
        return view('admin', compact('admins'));
    }

    public function crear(Request $request)
    {
        //return $request->all();

        $registroNuevo = new App\Models\productos;
        $registroNuevo->nombre = $request->nombre;
        $registroNuevo->descripcion = $request->descripcion;
        $registroNuevo->imagen = $request->imagen;
        $registroNuevo->enlaces_videos = $request->enlaces_videos;

        $registroNuevo->save();

    }

    public function eliminar($id)
    {
        $notaEliminar = App\Models\productos::findOrFail($id);
        $notaEliminar->delete();
    }

    public function edit($id)
    {
        $prod = App\Models\productos::findOrFail($id);
        return view('gestion', compact('prod'));
    }

    public function updateProd(Request $request, $id)
    {
        $prodUpdate = App\Models\productos::find($id);

        $prodUpdate->nombre = $request->nombre;
        $prodUpdate->descripcion = $request->descripcion;
        $prodUpdate->imagen = $request->newimage;
        $prodUpdate->enlaces_videos = $request->enlaces_videos;

        $prodUpdate->save();
    }

}
