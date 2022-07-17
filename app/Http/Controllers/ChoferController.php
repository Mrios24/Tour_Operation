<?php

namespace App\Http\Controllers;

use App\Models\Chofer;
use Illuminate\Http\Request;

class ChoferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $buscar = $request->get('buscar');

        $datos['chofer'] = Chofer::where('codigo', 'like', '%' . $buscar . '%')->paginate(10);
        return view('chofer.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('chofer.create');
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
            'nombre' => 'required|string|max:20',
            'tipo_chofer' => 'required|string|max:15',




        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'nombre.required' => 'El nombre es requerido',
            'tipo_chofer.required' => 'La tipo de chofer es requerida',


        ];

        $this->validate($request, $campos, $mensaje);

        $datosChofer = request()->except('_token');
        Chofer::insert($datosChofer);

        return redirect('chofer')->with('mensaje', 'Chofer agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chofer  $chofer
     * @return \Illuminate\Http\Response
     */
    public function show(Chofer $chofer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chofer  $chofer
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $chofer = Chofer::findOrFail($id);

        return view('chofer.edit', compact('chofer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chofer  $chofer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'codigo' => 'required|string|max:11',
            'nombre' => 'required|string|max:20',
            'tipo_chofer' => 'required|string|max:15',




        ];

        $mensaje = [

            'codigo.required' => 'El codigo es requerido',
            'nombre.required' => 'El nombre es requerido',
            'tipo_chofer.required' => 'La tipo de chofer es requerida',


        ];

        $this->validate($request, $campos, $mensaje);

        $datosChofer = request()->except('_token', '_method');
        Chofer::where('codigo', 'like', '%' . $id . '%')->update($datosChofer);

        return redirect('chofer')->with('mensaje', 'Chofer actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chofer  $chofer
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chofer::where('codigo', 'like', '%' . $id . '%')->delete($id);
        return redirect('chofer')->with('mensaje', 'Chofer eliminado');
    }
}