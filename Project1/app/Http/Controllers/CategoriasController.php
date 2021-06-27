<?php

namespace App\Http\Controllers;
use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $categorias = Categoria::all();
        $nombre = $request->get('buscarpor');
        $categorias = Categoria::nombres($nombre)->paginate();
        return view('admin.Categorias.index',compact('categorias'));
    }
    public function indexcliente(Request $request)
    {
        $categorias = Categoria::all();
        $nombre = $request->get('buscarpor');
        $categorias = Categoria::nombres($nombre)->paginate();
        return view('cliente.Cat',compact('categorias'));
    }
    public function indexadmin(Request $request)
    {
        $categorias = Categoria::all();
        $nombre = $request->get('buscarpor');
        $categorias = Categoria::nombres($nombre)->paginate();
        return view('admin.Categorias.indexadmin',compact('categorias'));
    }
    public function indexcontador(Request $request)
    {
        $categorias = Categoria::all();
        $nombre = $request->get('buscarpor');
        $categorias = Categoria::nombres($nombre)->paginate();
        return view('contador.index1',compact('categorias'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Categorias.create');
    }
    public function createadmin()
    {
        return view('admin.Categorias.createadmin');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        //$categoria->categoria = $request->input('categoria');
        $categoria->save();
       // Categoria::agregar($seccion);
        return redirect('/Categorias');
    }
    public function storeadmin(Request $request)
    {
        $categoria = new Categoria();
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        //$categoria->categoria = $request->input('categoria');
        $categoria->save();
       // Categoria::agregar($seccion);
        return redirect('/Categoriasadmin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.Categorias.show', compact('categoria'));
    }
    public function showadmin($id)
    {
        $categoria = Categoria::find($id);
        return view('admin.Categorias.showadmin', compact('categoria'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoria = Categoria::find($id);
        // $seccion = Categoria::mostrar($id);
         return view('admin.Categorias.edit', compact('categoria'));
    }
    public function editadmin($id)
    {
        $categoria = Categoria::find($id);
        // $seccion = Categoria::mostrar($id);
         return view('admin.Categorias.editadmin', compact('categoria'));
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
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();
        return redirect('/Categorias');
    }
    public function updateadmin(Request $request, $id)
    {
        $categoria = Categoria::find($id);
        $categoria->nombre = $request->input('nombre');
        $categoria->descripcion = $request->input('descripcion');
        $categoria->save();
        return redirect('/Categoriasadmin');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Categoria::destroy($id);
        return redirect('/Categorias');
    }
}
