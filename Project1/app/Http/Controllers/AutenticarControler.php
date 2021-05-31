<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutenticarControler extends Controller
{
    public function validar(Request $request)
    {
        switch($request->input('usuario')){
            case 'supervisor':
                if($request->input('contraseña')=="supervisor")
                    return redirect('/tablero');
                else return redirect('/autenticar');
                break;

            case 'admin':
                    if($request->input('contraseña')=="admin")
                        return redirect('/Categorias');
                    else return redirect('/autenticar');
                    break;
            
            case 'cliente':
                        if($request->input('contraseña')=="cliente")
                            return redirect('/preview');
                        else return redirect('/autenticar');
                        break;
            case 'contador':
                            if($request->input('contraseña')=="contador")
                                return redirect('/Contador');
                            else return redirect('/autenticar');
                            break;
            default:
                return redirect('/autenticar')->with('error','usuario no registrado');
                break;
        }
    }
}
