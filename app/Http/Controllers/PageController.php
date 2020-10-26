<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class PageController extends Controller
{
    public function inicio()
    {
        $productos = App\producto::all();
        return view('index', compact('productos'));
    }
}

?>