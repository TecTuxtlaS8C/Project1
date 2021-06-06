<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupervisorController extends Controller
{
    public function vistasupervisor() {

        return view('supervisor.index');
    }
}
