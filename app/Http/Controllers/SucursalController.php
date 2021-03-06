<?php

namespace App\Http\Controllers;

use App\Sucursal;
use Illuminate\Http\Request;

class SucursalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sucursales= Sucursal::all();
        return view("../sucursales/index",compact("sucursales"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("../sucursales/create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['nombre_sucursal'=>'required','direccion_sucursal'=>'required','email_sucursal'=>'required',]);
        $sucursal=new Sucursal;
        $sucursal->nombre_sucursal=$request->nombre_sucursal;
        $sucursal->direccion_sucursal=$request->direccion_sucursal;
        $sucursal->email_sucursal=$request->email_sucursal;
        $sucursal->save();
        return redirect("/sucursales");
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
        $sucursal = Sucursal::findOrFail($id);
        return view("sucursales.edit", compact("sucursal"));   
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
        $this->validate($request,['nombre_sucursal'=>'required','direccion_sucursal'=>'required','email_sucursal'=>'required',]);
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->update($request->all());
        return redirect("/sucursales");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sucursal = Sucursal::findOrFail($id);
        $sucursal->delete();
        return redirect("/sucursales");
    }
}
