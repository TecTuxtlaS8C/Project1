<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContadorController extends Controller
{
    public function vistacontador() {

        return view('contador.index');
    }
}
