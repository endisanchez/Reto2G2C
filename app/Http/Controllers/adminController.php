<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App;

class adminController extends Controller
{
    public function admin()
    {
        $admins = App\Models\Productos::all();
        return view('admin', compact('admins'));
    }
}