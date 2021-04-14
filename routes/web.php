<?php

use Illuminate\Support\Facades\Route;
use App\models\empresa;
use App\models\empleado;
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

Route::get("testEmpresas", function(){
    $empresa = Empresa::where("nit", 745039)->first();
    dd($empresa->empleados);
});

Route::get("Listado", function(){
    $empleado = Empleado::where("codigo", ">=", 1)->get();
    dd($empleado);
});

Route::get("Listado-a-30", function(){
    $empleado = Empleado::where("codigo", "<=", 30)->get();
    dd($empleado);
});

Route::get("actualizacion", function(){
    $empleado = Empleado::find(1);
    $empleado->nombre = "Alberto Jose";
    $empleado->save();
    dd($empleado);
});

Route::get("agregar", function(){
    $empleado = new empleado;
    $empleado->nombre = "Jose Julián";
    $empleado->codigo = "90232323";
    $empleado->lugar_nacimiento = "Bogotá";
    $empleado->fecha_nacimiento = "1999/09/09";
    $empleado->telefono = "1111111111";
    $empleado->cargo = "Ingeniero";
    $empleado->estado = "prueba";
    $empleado->empresa_id = "20";
    $empleado->save();
    dd($empleado);
});

Route::get("eliminar", function(){
    $empleado = Empleado::find(65);
    $empleado -> delete();
    dd($empleado);
});

Route::get("Listado-de-30-en adelante", function(){
    $empleado = Empleado::where("codigo", ">", 30)->get();
    dd($empleado);
});

Route::get("empleado", function(){
    $empleado = Empleado::find(1);
    dd($empleado);
});

Route::get("mostrar-empresa", function(){
    $empleado = Empleado::find(1);
    dd($empleado->empresa);
});

Route::get("Listado-de-a", function(){
    $empleado = Empleado::where("nombre", "like", "a%")->orderBy("nombre")->get();
    dd($empleado);
});

Route::get("lugar-nacimiento-c", function(){
    $empleado = Empleado::where("lugar_nacimiento", "like", "c%")->orderBy("lugar_nacimiento")->get();
    dd($empleado);
});

