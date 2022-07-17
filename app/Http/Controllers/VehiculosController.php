<?php

namespace App\Http\Controllers;

use App\Models\Vehiculos;
use Illuminate\Http\Request;

class VehiculosController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');

        $datos['vehiculo'] = Vehiculos::where('codigo', 'like', '%' . $buscar . '%')->paginate(10);
        return view('vehiculo.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehiculo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $campos = [
            'codigo' => 'required|string|max:11',
            'detalle' => 'required|string|max:20',
            'tipo_vehiculo' => 'required|string|max:15',




        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'detalle.required' => 'El detalle es requerido',
            'tipo_vehiculo.required' => 'El tipo de chofer es requerido',


        ];

        $this->validate($request, $campos, $mensaje);

        $datosVehiculo = request()->except('_token');
        Vehiculos::insert($datosVehiculo);

        return redirect('vehiculos')->with('mensaje', 'Vehiculo agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function show(Vehiculos $vehiculos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $vehiculo = Vehiculos::findOrFail($id);

        return view('vehiculo.edit', compact('vehiculo'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'codigo' => 'required|string|max:11',
            'detalle' => 'required|string|max:20',
            'tipo_vehiculo' => 'required|string|max:15',




        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'detalle.required' => 'El detalle es requerido',
            'tipo_vehiculo.required' => 'El tipo de vehiculo es requerida',


        ];


        $this->validate($request, $campos, $mensaje);

        $datosVehiculo = request()->except('_token', '_method');
        Vehiculos::where('codigo', 'like', '%' . $id . '%')->update($datosVehiculo);

        return redirect('vehiculo')->with('mensaje', 'Vehiculo actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehiculos  $vehiculos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Vehiculos::where('codigo', 'like', '%' . $id . '%')->delete($id);
        return redirect('vehiculo')->with('mensaje', 'Vehiculo eliminado');
    }
}