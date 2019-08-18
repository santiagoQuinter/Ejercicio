<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dueno as DuenoModel;
use App\Vehiculo as VehiculoModel;
use Illuminate\Support\Facades\Validator;

class DuenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('registroVehiculo');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Validator::make($request ->all(), [
            'nombre' => 'required',
            'cedula' => 'required',
            'placa' => 'required',
            'marca' => 'in:MAZDA,TOYOTA,CHEVROLET'
            ], [
            'nombre.required' => 'El nombre es obligatorio',
            'cedula.required' => 'La cédula es obligaría',
            'placa.required' => 'La placa es obligatorí',
            'marca.in' => 'La marca de ser:MAZDA,TOYOTA O CHEVROLET',
        ])->validated();;

        $dueno = DuenoModel::create([
            'nombre' => $request['nombre'],
            'cedula' => $request['cedula'],
        ]);
        
        VehiculoModel::create([
            'placa' => $request['placa'],
            'marca' => $request['marca'],
            'dueno_id' => $dueno->id,
        ]);
        return back()->with('mensaje','Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if($id == 'A765'){
            return view('zonainicio', ['aprobado' => True]);
        }
        return view('zonainicio', ['aprobado' => False]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
