<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClienteController extends Controller
{
    
    public function vistacliente() {

        return view('cliente.index');
    }

}
