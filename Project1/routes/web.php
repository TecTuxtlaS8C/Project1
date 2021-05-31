<?php
use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
/*
|--------------------------------------------------------------------------|
| Web Routes                                                               |
|--------------------------------------------------------------------------|
*/

Route::get('/', function () {
    $categorias = Categoria::all();

  return view('supervisor.Bienvenido',compact('categorias'));

});
Route::get('/Invitado', function () {
    $categorias = Categoria::all();

  return view('supervisor.Welcome',compact('categorias'));

});
Route::get('/preview', function () {
    $productos = Producto::all();
    return view('cliente.w',compact('productos'));
});
Route::get('/user', function () {
    $usuarios = Usuario::all();
    return view('supervisor.we',compact('usuarios'));
});

Route::get('autenticar', function () {
    return view('autenticar');
});
Route::get('tablero', function () {
    return view('supervisor.tablero');
});
Route::get('/Apat', function () {
    return view('Apat');
});

Route::get('/Contador', function () {
    return view('Contador.contador');
});


Route::post('validar','AutenticarControler@validar');
Route::get('listar_por_categoria/{categoria_id}','BuscarController@listar_por');
Route::get('listar_por_producto/{prod_id}','BuscarController@listar_por_prod');
//////////////////////////////////////////////////////////////
Route::get('Categorias','SegundoControlador@index');
Route::post('Categorias','SegundoControlador@store');
Route::get('Categorias/create','SegundoControlador@create');
Route::get('Categorias/{categoria}','SegundoControlador@show');
Route::put('Categorias/{categoria}','SegundoControlador@update');
Route::delete('Categorias/{categoria}','SegundoControlador@destroy');
Route::get('Categorias/{categoria}/edit','SegundoControlador@edit');
//////////////////////////////////////////////////////////////////
Route::get('Productos','ProductosControler@index');
Route::post('Productos','ProductosControler@store');
Route::get('Productos/create','ProductosControler@create');
Route::get('Productos/{producto}','ProductosControler@show');
Route::put('Productos/{producto}','ProductosControler@update');
Route::delete('Productos/{producto}','ProductosControler@destroy');
Route::get('Productos/{producto}/edit','ProductosControler@edit');
///////////////////////////////////////////////////////////////////
Route::get('Usuarios','usuarios@index');
Route::post('Usuarios','usuarios@store');
Route::get('Usuarios/create','usuarios@create');
Route::get('Usuarios/{usuario}','usuarios@show');
Route::put('Usuarios/{usuario}','usuarios@update');
Route::delete('Usuarios/{usuario}','usuarios@destroy');
Route::get('Usuarios/{usuario}/edit','usuarios@edit');


