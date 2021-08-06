<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehiculo;
use App\Helpers\Helper;

class VehiculoController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $vehiculos = Vehiculo::all();

        return view('admin.vehiculo.index', compact('vehiculos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validated =(object) $request->validate([
            'placa' => 'required|unique:vehiculos',
            'color' => 'required',
            'marca' => 'required',
            'tipo' => 'required|numeric',
            'propietario_id' => 'required',
            'conductor_id' => 'required',
        ]);

//        dd($validated);
        Vehiculo::updateOrCreate([
            'propietario_id' => $validated->propietario_id,
            'conductor_id' => $validated->conductor_id,
            'placa' => $validated->placa,
            'color' => $validated->color,
            'marca' => $validated->marca,
            'tipo' => $validated->tipo,
        ]);

        return back()->with('alertOk', 'Se regitro corectamente el vehiculo  placas '.$validated->placa.' color '.$validated->color.'.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
