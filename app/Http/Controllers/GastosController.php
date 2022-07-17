<?php

namespace App\Http\Controllers;

use App\Models\Gastos;
use Illuminate\Http\Request;

class GastosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');

        $datos['gastos'] = Gastos::where('codigo', 'like', '%' . $buscar . '%')->paginate(10);
        return view('gastos.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gastos.create');
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
        //
        $campos = [
            'codigo' => 'required|string|max:11',
            'tipo_gasto' => 'required|string|max:20',
            'fecha' => 'required|string|max:15',
            'descripcion' => 'required|string|max:200',



        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'tipo_gasto.required' => 'El tipo de gasto es requerido',
            'fecha.required' => 'La fecha es requerida',
            'descripcion.required' => 'La descripcion es requerida',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosGastos = request()->except('_token');
        Gastos::insert($datosGastos);

        return redirect('gasto')->with('mensaje', 'Gasto agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Gastos $gastos)
    {
        //
    }


    public function edit($id)
    {
        $gasto = Gastos::findOrFail($id);

        return view('gastos.edit', compact('gasto'));
    }


    public function update(Request $request, $id)
    {
        //
        $campos = [
            'codigo' => 'required|string|max:11',
            'tipogasto' => 'required|string|max:20',
            'fecha' => 'required|string|max:15',
            'descripcion' => 'required|string|max:200',
            'vehiculo' => 'required|string|max:10',


        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'tipogasto.required' => 'El tipo de gasto es requerido',
            'fecha.required' => 'La fecha es requerida',
            'descripcion.required' => 'La descripcion es requerida',

        ];

        $this->validate($request, $campos, $mensaje);

        $datosGastos = request()->except('_token', '_method');
        Gastos::where('codigo', 'like', '%' . $id . '%')->update($datosGastos);

        return redirect('gasto')->with('mensaje', 'Gasto actualizado');
    }


    public function destroy($id)
    {

        Gastos::where('codigo', 'like', '%' . $id . '%')->delete($id);
        return redirect('gastos')->with('mensaje', 'Gasto eliminado');
    }
}