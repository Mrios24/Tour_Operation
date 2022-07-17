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


            <h1>Registro de gastos</h1>



            <a href="{{ url('gastos/create') }}" class="btn btn-success"> Registrar gasto</a>

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

                        <th>Codigo Gasto</th>
                        <th>Tipo de gasto</th>
                        <th>Fecha</th>
                        <th>Descripcion</th>
                        <th>Codigo Vehiculo</th>
                      

                        <th>Acciones</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($gastos as $gasto)
                        <tr>

                            <td>{{ $gasto->codigo }}</td>
                            <td>{{ $gasto->tipo_gasto }}</td>
                            <td>{{ $gasto->fecha }}</td>
                            <td>{{ $gasto->descripcion }}</td>
                            <td>{{ $gasto->vehiculo }}</td>
                      
                            <td>

                                <a href="{{ url('/gastos/' . $gasto->id . '/edit') }}" class="btn btn-warning">


                                    Editar
                                </a>
                                |

                                <form action="{{ url('/gastos/' . $gasto->id) }}" class="d-inline" method="post">
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
            {!! $gastos->links() !!}

        </div>

    </div>
@endsection
