<?php

use Illuminate\Support\Facades\Route;
use App\Models\Usuario;
use App\Models\Pedido;
use App\Models\Seguimiento;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\SeguimientoController;
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

Route::view('/', "primero");
Route::view("/layout","layout");
Route::view("/layout1","layout1");
Route::view("/layout2","layout2");



Route::view("/usuario","usuario");
Route::get("/usuario/{idcolumna}", function (int $idcolumna){
    return view("usuario")->with("idc",$idcolumna);
});
Route::post("/usu", [UsuarioController::class,"guardar"]);
Route::get("/mosusu",  [UsuarioController::class,"mostrar"]);
Route::get("/actusu/{id}",  [UsuarioController::class,"mostrarUsu"],["id"=>"id"]);
Route::post("/actusu", [UsuarioController::class,"actualizar"]);
Route::get("/delusu/{id}",  [UsuarioController::class,"mostrarUsua"],["id"=>"id"]);
Route::post("/delusu", [UsuarioController::class,"eliminar"]);


Route::view("/ped","pedido");
Route::get("/pedido/{idcolumna}", function (int $idcolumna){
    return view("pedido")->with("idc",$idcolumna);
});
Route::post("/ped",[CursoController::class,"guardar"]);
Route::get("/mosped",[CursoController::class,"mostrar"]);
Route::get("/actped/{id}",  [CursoController::class,"mostrarPed"],["id"=>"id"]);
Route::post("/actcur", [CursoController::class,"actualizar"]);
Route::get("/delped/{id}",  [CursoController::class,"mostrarPeds"],["id"=>"id"]);
Route::post("/delped", [CursoController::class,"eliminar"]);


Route::view("/seg","seguimiento");
Route::get("/seg/{idcolumna}", function (int $idcolumna){
    return view("seguimiento")->with("idc",$idcolumna);
});
Route::post("/seg",[CursoController::class,"guardar"]);
Route::get("/moseg",[CursoController::class,"mostrar"]);
Route::get("/actseg/{id}",  [CursoController::class,"mostrarSeg"],["id"=>"id"]);
Route::post("/actseg", [CursoController::class,"actualizar"]);
Route::get("/delseg/{id}",  [CursoController::class,"mostrarSegs"],["id"=>"id"]);
Route::post("/delseg", [CursoController::class,"eliminar"]);
