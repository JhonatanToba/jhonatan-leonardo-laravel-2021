<?php

namespace App\Http\Controllers;

use App\Models\empleado;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();   
        return view ("components.empleados.index", compact("empleados"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ("components.empleados.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nuevo = New empleado;
        $nuevo->codigo = $request->codigo;
        $nuevo->nombre = $request->nombre;
        $nuevo->lugar_nacimiento = $request->lugar_nacimiento;
        $nuevo->fecha_nacimiento = $request->fecha_nacimiento;
        $nuevo->telefono = $request->telefono;
        $nuevo->cargo = $request->cargo;
        $nuevo->empresa_id = $request->empresa_id;
        
        $nuevo->save();

        return redirect()->route("empleado.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(empleado $empleado)
    {  
        return view ("components.empleados.show", ["empleado"=> $empleado]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit(empleado $empleado)
    {
        return view ("components.empleados.edit", ["empleado"=> $empleado]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empleado $empleado)
    {

        $empleado= empleado::find($empleado->id);
        $empleado->codigo = $request->codigo;
        $empleado->nombre = $request->nombre;
        $empleado->lugar_nacimiento = $request->lugar_nacimiento;
        $empleado->fecha_nacimiento = $request->fecha_nacimiento;
        $empleado->telefono = $request->telefono;
        $empleado->cargo = $request->cargo;
        $empleado->estado = $request->estado;

        $empleado->save();

        return redirect()->route("empleado.index");


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy(empleado $empleado)
    {
        
        $empleado->delete();
        return redirect()->route("empleado.index");
    }

    /* $productosActuales= $request->session()->get("carrito.productos");

    if(count($productosActuales)<0){
        foreach ($productosActuales as $index => $producto) {
            if ($producto["producto"->id == $productSelected->id]) {
                $productSelected[$index]["cantidad"] += $amount;
            $request->session()->put("carrito.productos",$productSelected);
            } else {
                $request->session()->push("carrito.productos",["producto"=>$productSelected,"cantidad"=>$amount]);
            }
            
        }
    }else{
        $request->session()->push("carrito.productos",["producto"=>$productSelected, "cantidad"=> $amount]);
    } */
}
