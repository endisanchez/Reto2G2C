<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class ProductosController extends Controller
{
    public function inicio()
    {
        $productos = App\Models\Productos::all();
        return view('productos', compact('productos'));
    }
}
