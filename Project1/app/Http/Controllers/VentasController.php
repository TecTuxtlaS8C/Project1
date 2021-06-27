<?php

namespace App\Http\Controllers;

use App\Models\Ventas;
use Illuminate\Http\Request;

class VentasController extends Controller
{
 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ventas = Ventas::all();
         return view('cliente.ventas.index',compact('ventas'));
    }
    public function indexmiscompras()
    {
        $ventas = Ventas::all();
         return view('cliente.ventas.indexa',compact('ventas'));
    }
    public function indexcontador()
    {
        $ventas = Ventas::all();
         return view('contador.index3',compact('ventas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cliente.ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $ventas = new Ventas();
        $ventas->nombre = $request->input('producto');
        $ventas->cantidad = $request->input('cantidad');
        $ventas->precio_compra = $request->input('precio_compra');
        $ventas->precio_venta = $request->input('precio_venta');
        $total =  $ventas->precio_venta = $request->input('precio_venta') *  $ventas->cantidad = $request->input('cantidad');
        $ventas->total = $total; 
        $ventas->save();

        return redirect('/Productoscliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
