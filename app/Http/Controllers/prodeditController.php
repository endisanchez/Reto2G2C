<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class prodeditController extends Controller
{
    public function edit($id)
    {
        $prod = App\Models\Productos::findOrFail($id);
        return view('gestion', compact('prod'));
    }
}
