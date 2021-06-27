<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\SupervisorController;
use App\Http\Controllers\ventas;
use App\Http\Controllers\PreguntasController;

use App\Models\Producto;
use App\Models\Categoria;
use App\Models\Preguntas;

Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register', [RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register', [RegisterController::class, 'store'])
    ->name('register.store');



Route::get('/login', [SessionsController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login', [SessionsController::class, 'store'])
    ->name('login.store');

Route::get('/logout', [SessionsController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');


Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');

Route::get('/cliente', [ClienteController::class, 'vistacliente'])
    ->middleware('auth.cliente')
    ->name('cliente.index');

Route::get('/contador', [ContadorController::class, 'vistacontador'])
    ->middleware('auth.contador')
    ->name('contador.index');


Route::get('/supervisor', [SupervisorController::class, 'vistasupervisor'])
    ->middleware('auth.supervisor')
    ->name('supervisor.index');
////
Route::get('/ClienteProduct', function () {
    $productos = Producto::all();
    return view('cliente.Prod',compact('productos'));
});
Route::get('/ClienteCat', function () {
    $categorias = Categoria::all();

  return view('cliente.Cat',compact('categorias'));

});
Route::get('/productos', function () {
    $productos = Producto::all();
    return view('supervisor.productos',compact('productos'));
});
Route::get('/productosadminview', function () {
    $productos = Producto::all();
    return view('admin.Productos.productosadmin',compact('productos'));
});
Route::get('/carrito', function () {
    return view('cliente.carrito');
});
///
Route::get('Categorias','CategoriasController@index');
Route::get('Categoriasadmin','CategoriasController@indexadmin');
Route::get('Categoriascliente','CategoriasController@indexcliente');
Route::get('Categoriascontador','CategoriasController@indexcontador');
Route::post('Categorias','CategoriasController@store');
Route::post('Categoriasadmin','CategoriasController@storeadmin');
Route::get('Categorias/create','CategoriasController@create');
Route::get('Categoriasadmin/create','CategoriasController@createadmin');
Route::get('Categorias/{categoria}','CategoriasController@show');
Route::get('Categoriasadmin/{categoria}','CategoriasController@showadmin');
Route::put('Categorias/{categoria}','CategoriasController@update');
Route::put('Categoriasadmin/{categoria}','CategoriasController@updateadmin');
Route::delete('Categorias/{categoria}','CategoriasController@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasController@edit');
Route::get('Categoriasadmin/{categoria}/edit','CategoriasController@editadmin');

Route::get('Productos','ProductosControler@index');
Route::get('Productoscliente','ProductosControler@indexcliente');
Route::get('Productosadmin','ProductosControler@indexadmin');
Route::get('Productoscontador','ProductosControler@indexcontador');
Route::post('Productos','ProductosControler@store');
Route::post('Productosadmin','ProductosControler@storeadmin');
Route::get('Productos/create','ProductosControler@create');
Route::get('Productosadmin/create','ProductosControler@createadmin');
Route::get('Productos/{producto}','ProductosControler@show');
Route::get('Productosadmin/{producto}','ProductosControler@showadmin');
Route::get('Productoscliente/{producto}','ProductosControler@showcliente');
Route::put('Productos/{producto}','ProductosControler@update');
Route::put('Productosadmin/{producto}','ProductosControler@updateadmin');
Route::delete('Productos/{producto}','ProductosControler@destroy');
Route::get('Productos/{producto}/edit','ProductosControler@edit');
Route::get('Productosadmin/{producto}/edit','ProductosControler@editadmin');
//////
Route::get('Usuarios','UserController@index');
Route::get('Usuarios/contador','UserController@indexcontador');
Route::post('Usuarios','UserController@store');
Route::get('Usuarios/create','UserController@create');
Route::get('Usuarios/{user}','UserController@show');
Route::put('Usuarios/{user}','UserController@update');
Route::delete('Usuarios/{user}','UserController@destroy');
Route::get('Usuarios/{user}/edit','UserController@edit');
//
Route::get('Restablecer/{user}/edit','ResController@edit');
Route::put('Restablecer/{user}','ResController@update');

Route::get('Preguntas','PreguntasController@index');
Route::get('Preguntas/create','PreguntasController@create');
Route::post('Preguntas','PreguntasController@store');
Route::get('Preguntas/{pregunta}/edit','PreguntasController@edit');
Route::put('Preguntas/{pregunta}','PreguntasController@update');
///
Route::get('ventas','ventasController@index');
Route::get('ventass','ventasController@indexmiscompras');
Route::get('ventas/contador','ventasController@indexcontador');
Route::get('ventas/create','ventasController@create');
Route::post('compras/ingreso','ventasController@store');
