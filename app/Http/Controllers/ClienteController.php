<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');

        $datos['clientes'] = Cliente::where('cedula', 'like', '%' . $buscar . '%')->paginate(10);
        return view('clientes.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
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
            'nombre' => 'required|string|max:30',
            'cedula' => 'required|string|max:10',
            'edad' => 'required|string|max:25',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:10',


        ];

        $mensaje = [

            'nombre.required' => 'El Nombre es requerido',
            'cedula.required' => 'La Cedula es requerida',
            'edad.required' => 'La edad es requerido',
            'direccion.required' => 'La Direccion es requerida',

            'telefono.required' => 'El telefono es requerido',


        ];

        $this->validate($request, $campos, $mensaje);

        $datoscliente = request()->except('_token');
        Cliente::insert($datoscliente);

        return redirect('cliente')->with('mensaje', 'Cliente agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', compact('cliente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        //
        $campos = [
            'nombre' => 'required|string|max:30',
            'cedula' => 'required|string|max:10',
            'edad' => 'required|string|max:25',
            'direccion' => 'required|string|max:200',
            'telefono' => 'required|string|max:10',


        ];

        $mensaje = [

            'nombre.required' => 'El Nombre es requerido',
            'cedula.required' => 'La Cedula es requerida',
            'edad.required' => 'El Primer apellido es requerido',
            'direccion.required' => 'La Direccion es requerida',

            'telefono.required' => 'El telefono es requerido',


        ];

        $this->validate($request, $campos, $mensaje);

        $datoscliente = request()->except('_token', '_method');
        Cliente::where('cedula', 'like', '%' . $id . '%')->update($datoscliente);

        return redirect('cliente')->with('mensaje', 'Cliente actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        Cliente::where('cedula', 'like', '%' . $id . '%')->delete($id);
        return redirect('cliente')->with('mensaje', 'Persona eliminado');
    }
}