<?php

namespace App\Http\Controllers;

use App\Models\Proveedores;
use Illuminate\Http\Request;

class ProveedoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');

        $datos['proveedor'] = Proveedores::where('codigo', 'like', '%' . $buscar . '%')->paginate(10);
        return view('proveedor.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'nombre' => 'required|string|max:30',
            'codigo' => 'required|string|max:10',
            'email' => 'required|string|max:50',
            'detalle' => 'required|string|max:200',
            'telefono' => 'required|string|max:10',


        ];

        $mensaje = [

            'nombre.required' => 'El Nombre es requerido',
            'codigo.required' => 'El codigo es requerida',
            'email.required' => 'El email es requerido',
            'detalle.required' => 'El detalle es requerido',
            'telefono.required' => 'El telefono es requerido',


        ];

        $this->validate($request, $campos, $mensaje);

        $datosProveedor = request()->except('_token');
        Proveedores::insert($datosProveedor);

        return redirect('proveedor')->with('mensaje', 'Proveedor agregada');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function show(Proveedores $proveedores)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedores::findOrFail($id);

        return view('proveedor.edit', compact('proveedor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'nombre' => 'required|string|max:30',
            'codigo' => 'required|string|max:10',
            'email' => 'required|string|max:50',
            'detalle' => 'required|string|max:200',
            'telefono' => 'required|string|max:10',


        ];

        $mensaje = [

            'nombre.required' => 'El Nombre es requerido',
            'codigo.required' => 'El codigo es requerida',
            'email.required' => 'El email es requerido',
            'detalle.required' => 'El detalle es requerido',
            'telefono.required' => 'El telefono es requerido',


        ];

        $this->validate($request, $campos, $mensaje);

        $datosProveedor = request()->except('_token', '_method');
        Proveedores::where('codigo', 'like', '%' . $id . '%')->update($datosProveedor);

        return redirect('proveedor')->with('mensaje', 'Proveedor actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Proveedores  $proveedores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedores::where('codigo', 'like', '%' . $id . '%')->delete($id);
        return redirect('proveedor')->with('mensaje', 'Proveedor eliminado');
    }
}