@extends('layouts.app')

@section('content')
    <div class="container">


        <div class="p-3 mb-2 bg-secondary text-white">


            @if (Session::has('mensaje'))
                <div class="alert alert-success alert-dismissible" role="alert">

                    {{ Session::get('mensaje') }}

                    <button type="button" class="close" data-dismiss="alert" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
            @endif


            <h1>Registro de vehiculos</h1>



            <a href="{{ url('vehiculo/create') }}" class="btn btn-success"> Registrar vehiculo</a>

            <br />
            <br />

            <form class="form-inline float-right">

                <input name="buscar" type="search" class="form-control mr-sm-2" placeholder="Buscar" aria-label="Search">
                <button type="submit" class="btn btn-success my-sm-0">Buscar</button>
            </form>






            <br />
            <br />
            <table class="table table-dark">

                <thead class="thead-info">
                    <tr>

                        <th>Codigo vehiculo</th>
                        <th>Detalle</th>
                        <th>Tipo de vehiculo</th>
                       
                        <th>Acciones</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($vehiculo as $vehiculo)
                        <tr>

                            <td>{{ $vehiculo->codigo }}</td>
                            <td>{{ $vehiculo->detalle }}</td>
                            <td>{{ $vehiculo->tipo_vehiculo }}</td>
                       
                      
                            <td>

                                <a href="{{ url('/vehiculo/' . $vehiculo->id . '/edit') }}" class="btn btn-warning">


                                    Editar
                                </a>
                                |

                                <form action="{{ url('/vehiculo/' . $vehiculo->id) }}" class="d-inline" method="post">
                                    @csrf

                                    {{ method_field('DELETE') }}
                                    <input class="btn btn-danger" type="submit"
                                        onclick="return confirm('Deseas eliminar este registro?')" value="Eliminar">

                                </form>



                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>
           

        </div>

    </div>
@endsection
