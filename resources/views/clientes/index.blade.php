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


            <h1>Registro de clientes</h1>



            <a href="{{ url('cliente/create') }}" class="btn btn-success"> Registrar cliente</a>

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

                        <th>Cedula cliente</th>
                        <th>Nombre</th>
                        <th>Edad</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Direccion</th>

                        <th>Acciones</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($clientes as $cliente)
                        <tr>

                            <td>{{ $cliente->cedula }}</td>
                            <td>{{ $cliente->nombre }}</td>
                            <td>{{ $cliente->edad }}</td>
                            <td>{{ $cliente->telefono }}</td>
                            <td>{{ $cliente->email }}</td>
                            <td>{{ $cliente->direccion }}</td>
                            <td>

                                <a href="{{ url('/cliente/' . $cliente->id . '/edit') }}" class="btn btn-warning">


                                    Editar
                                </a>
                                |

                                <form action="{{ url('/cliente/' . $cliente->id) }}" class="d-inline" method="post">
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
            {!! $clientes->links() !!}

        </div>

    </div>
@endsection
