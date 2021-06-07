<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
class ClienteController extends Controller
{
    
    public function vistacliente() {
        $productos = Producto::all();
        return view('cliente.index');
    }

}
