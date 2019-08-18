<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculo as VehiculoModel;

class VehiculoController extends Controller
{
    public function index()
    {
        $vehiculos = VehiculoModel::all();

        return view('listaVehiculos', [
            'vehiculos' => $vehiculos,
        ]);
    }

    public function estadistica(){
        $mazda = VehiculoModel::where('marca','MAZDA')->count();
        $chevrolet= VehiculoModel::where('marca','CHEVROLET')->count();
        $toyota = VehiculoModel::where('marca','TOYOTA')->count();
        return view('estadisticasVehiculos', [
            'mazda' => $mazda,'chevrolet' => $chevrolet, 'toyota'=> $toyota,
        ]);
    }
}
