<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BuscarController extends Controller
{
    public function listar_por($categoria_id){
        //return view('buscar.listar', ['categoria_id' => $categoria_id]);
        return view('buscar.listar', compact('categoria_id'));
    }
    public function listar_por_prod($prod_id){
        return view('buscar.list', compact('prod_id'));
    }
}
