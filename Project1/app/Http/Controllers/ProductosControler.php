<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\UploadedFiles;
use Illuminate\Support\Facades\DB;
class ProductosControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $productos = Producto::all();
        //$nombre = $request->get('buscarpor');
       // $productos = Producto::nombres($nombre)->paginate();
      // $query = trim($request->input('searchText'));
       $nombre = $request->get('buscarpor');
        
       $categoria = $request->get('buscarporcategoria');

       $productos = Producto::nombres($nombre)->categoria($categoria)->paginate();
        //se realizan inyecciones sql en crudo
        /*if ($request)
    	{
            $productos = Producto::all();
            // $articulos = Articulo::with('categoria')->get();         
            // var_dump(Articulo::find(1)->categoria);
            // var_dump(DB::getQueryLog());

    		$query = trim($request->input('searchText'));

            $productos = DB::table('productos as a')
            ->join('categorias as c', 'a.id', '=', 'c.id')
            ->select('a.id', 'a.nombre', 'a.cantidad', 'a.precio', 'a.descripcion', 'a.imagen', 'a.activa', 'c.nombre as categorias')
            ->where('a.nombre', 'LIKE', "%$query%")
            ->orderBy('a.id', 'DESC')
            ->paginate(5);

    		return view('admin.Productos.index', [
				'productos'=>$productos, 
				'searchText'=>$query
			]);
    	}*/
                return view('admin.Productos.index',['productos'=>$productos]);
    }
    public function indexcliente(Request $request)
    {
        $productos = Producto::all();
        $nombre = $request->get('buscarpor');
        $productos = Producto::nombres($nombre)->paginate();


        $productos = Producto::nombres($nombre)->paginate();
        return view('cliente.Prod',compact('productos'));
    }
    public function indexadmin(Request $request)
    {
        $productos = Producto::all();
        //$nombre = $request->get('buscarpor');
       // $productos = Producto::nombres($nombre)->paginate();
       $nombre = $request->get('buscarpor');
        
        $categoria = $request->get('buscarporcategoria');

        $productos = Producto::nombres($nombre)->categoria($categoria)->paginate();
        return view('admin.Productos.indexadmin',compact('productos'));
    }
    public function indexcontador(Request $request)
    {
        $productos = Producto::all();
        //$nombre = $request->get('buscarpor');
       // $productos = Producto::nombres($nombre)->paginate();
       $nombre = $request->get('buscarpor');
        
        $categoria = $request->get('buscarporcategoria');

        $productos = Producto::nombres($nombre)->categoria($categoria)->paginate();
        return view('contador.index2',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Productos.create');
    }
    public function createadmin()
    {
        return view('admin.Productos.createadmin');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');       
        $producto->save();
        return redirect('/Productos');*/
        $producto = new Producto();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'imagen/imagen/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath . $filename;
        }
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');    
        $producto->categoria = $request->input('categoria');  
        
        $producto->save();
        return redirect('/productos');
    }
    public function storeadmin(Request $request)
    {
        /*$producto = new Producto();
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');       
        $producto->save();
        return redirect('/Productos');*/
        $producto = new Producto();
        if($request->hasFile('imagen')){
            $file = $request->file('imagen');
            $destinationPath = 'imagen/imagen/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('imagen')->move($destinationPath, $filename);
            $producto->imagen = $destinationPath . $filename;
        }
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');    
        $producto->categoria = $request->input('categoria');  
        
        $producto->save();
        return redirect('/productosadminview');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);
        // $seccion =  Producto::mostrar($id);
         return view('admin.Productos.show', compact('producto'));
    }
    public function showadmin($id)
    {
        $producto = Producto::find($id);
        // $seccion =  Producto::mostrar($id);
         return view('admin.Productos.showadmin', compact('producto'));
    }
    public function showcliente($id)
    {
        $producto = Producto::find($id);
        // $seccion =  Producto::mostrar($id);
         return view('cliente.showcliente', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        //$seccion = Producto::mostrar($id);
        return view('admin.Productos.edit', compact('producto'));
    }
    public function editadmin($id)
    {
        $producto = Producto::find($id);
        //$seccion = Producto::mostrar($id);
        return view('admin.Productos.editadmin', compact('producto'));
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
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
       // $seccion = $request->input('seccion');
        //Producto::editar($id, $seccion);
        return redirect('/Productos');
    }
    public function updateadmin(Request $request, $id)
    {
        $producto = Producto::find($id);
        $producto->nombre = $request->input('nombre');
        $producto->descripcion = $request->input('descripcion');
        $producto->precio = $request->input('precio');
        $producto->cantidad = $request->input('cantidad');
        $producto->save();
       // $seccion = $request->input('seccion');
        //Producto::editar($id, $seccion);
        return redirect('/Productosadmin');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Producto::destroy($id);
        return redirect('/Productos');
    }
}
