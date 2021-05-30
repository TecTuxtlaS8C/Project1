<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/encargado', 'EncargadoController@index')->name('encargado')->middleware('Encargado');
Route::get('/contador', 'ContadorController@index')->name('contador')->middleware('Contador');
Route::get('/cliente', 'ClienteController@index')->name('cliente')->middleware('Cliente');
Route::get('/supervisor', 'SupervisorController@index')->name('supervisor')->middleware('Supervisor');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





