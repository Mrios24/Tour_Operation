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


            <h1>Registro de proveedores</h1>



            <a href="{{ url('proveedor/create') }}" class="btn btn-success"> Registrar proveedor</a>

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

                        <th>Codigo proveedor</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Telefono</th>
                        <th>Detalle</th>
                    
                        <th>Acciones</th>

                    </tr>
                </thead>


                <tbody>
                    @foreach ($proveedor as $proveedor)
                        <tr>

                            <td>{{ $proveedor->codigo }}</td>
                            <td>{{ $proveedor->nombre }}</td>
                            <td>{{ $proveedor->email }}</td>
                            <td>{{ $proveedor->telefono }}</td>
                            <td>{{ $proveedor->detalle }}</td>
                         
                            <td>

                                <a href="{{ url('/proveedor/' . $proveedor->id . '/edit') }}" class="btn btn-warning">


                                    Editar
                                </a>
                                |

                                <form action="{{ url('/proveedor/' . $proveedor->id) }}" class="d-inline" method="post">
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
