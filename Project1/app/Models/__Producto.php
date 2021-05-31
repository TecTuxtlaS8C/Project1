<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Session;
//use Illuminate\Database\Eloquent\Factories\HasFactory;

class Producto 
{
    static function todo(){ 
        $categorias = Session::get('categorias');
        return $categorias;
    }
    static function agregar($seccion){ 
        $categorias = Session::get('categorias');
        array_push($categorias,$seccion);
        Session::put('categorias',$categorias);
    }
    static function mostrar($i){ 
        $categorias = Session::get('categorias');
        return $categorias[$i];
    }
    static function editar($i,$seccion){ 
        $categorias = Session::get('categorias');
        $categorias[$i]=$seccion;
        Session::put('categorias',$categorias);
    }
    static function eliminar($id){ 
        $categorias = Session::get('categorias');
        unset( $categorias[$id]);
        Session::put('categorias',$categorias);
    }
}
