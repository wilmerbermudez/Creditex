<?php

namespace App\Http\Controllers;

use App\Cuenta;
use App\Transaccion;
use Illuminate\Http\Request;

class CuentasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::all();
        return view('cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cuentas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$validateDate = $request->validate([
          'name' => 'required|max: 20',
          'descripcion' => 'required|max: 20',
          'interes' => 'required'
        ]);*/

        $cuenta = new Cuenta();
        $cuenta->name = $request ->input('Nombre');
        $cuenta->descripcion = $request ->input('Descripcion');
        $cuenta->interes = $request ->input('Interes');
        $cuenta->save();
        return redirect()->route('cuentas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta = Cuenta::find($id);
        $transacciones = Transaccion::all();
        return view('cuentas.show', compact('cuenta', 'transacciones'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = Cuenta::find($id);
        return view('cuentas.edit', compact('cuenta'));
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
        $nuevoNombre = $request->input('Nombre');
        $nuevoDescripcion = $request->input('Descripcion');
        $nuevoInteres = $request->input('Interes');
        $cuenta = Cuenta::find($id);
        $cuenta ->name = $nuevoNombre;
        $cuenta ->descripcion = $nuevoDescripcion;
        $cuenta ->interes = $nuevoInteres;
        $cuenta->save();
        return  redirect()->route('cuentas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      Cuenta::find($id)->delete();
      return redirect()->route('cuentas.index');
    }
}
