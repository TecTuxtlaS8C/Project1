<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SessionsController extends Controller {
    
    public function create() {
        
        return view('auth.login');
    }

    public function store() {
        
        if(auth()->attempt(request(['email', 'password'])) == false) {
            return back()->withErrors([
                'message' => 'La Contraseña o correo son incorrectas, verifique los datos',
            ]);

        } 
       /* if(auth()->attempt(request(['email'])) == true) {
            return back()->withErrors([
                'mess' => 'El correo electronico ya existe, verifique otro',
            ]);

        } */
     else {

            if(auth()->user()->role == 'admin') {
                return redirect()->route('admin.index');
            }
        
            if(auth()->user()->role == 'cliente') {
                    return redirect()->route('cliente.index');
            } 
            if(auth()->user()->role == 'contador') {
                return redirect()->route('contador.index');
            } 
            if(auth()->user()->role == 'supervisor') {
                return redirect()->route('supervisor.index');
            } 
                //return redirect()->to('/');
            
        }  
   
    }

   
    public function destroy() {

        auth()->logout();

        return redirect()->to('/');
    }
}
