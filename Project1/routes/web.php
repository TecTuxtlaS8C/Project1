<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContadorController;
use App\Http\Controllers\SupervisorController;
use App\Models\Producto;
use App\Models\Categoria;

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


///
Route::get('Categorias','CategoriasController@index');
Route::post('Categorias','CategoriasController@store');
Route::get('Categorias/create','CategoriasController@create');
Route::get('Categorias/{categoria}','CategoriasController@show');
Route::put('Categorias/{categoria}','CategoriasController@update');
Route::delete('Categorias/{categoria}','CategoriasController@destroy');
Route::get('Categorias/{categoria}/edit','CategoriasController@edit');

Route::get('Productos','ProductosControler@index');
Route::post('Productos','ProductosControler@store');
Route::get('Productos/create','ProductosControler@create');
Route::get('Productos/{producto}','ProductosControler@show');
Route::put('Productos/{producto}','ProductosControler@update');
Route::delete('Productos/{producto}','ProductosControler@destroy');
Route::get('Productos/{producto}/edit','ProductosControler@edit');
//////
Route::get('Usuarios','UserController@index');
Route::post('Usuarios','UserController@store');
Route::get('Usuarios/create','UserController@create');
Route::get('Usuarios/{user}','UserController@show');
Route::put('Usuarios/{user}','UserController@update');
Route::delete('Usuarios/{user}','UserController@destroy');
Route::get('Usuarios/{user}/edit','UserController@edit');
//
Route::get('Restablecer/{user}/edit','ResController@edit');
Route::put('Restablecer/{user}','ResController@update');