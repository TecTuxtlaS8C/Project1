<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EncargadoController extends Controller
{
     
    public function index()
    {
        return view('encargado');
    }
}
