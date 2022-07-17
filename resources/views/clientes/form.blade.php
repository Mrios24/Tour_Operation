<div class="p-3 mb-2 bg-secondary text-white">
    <h1> Formulario cliente</h1>

    @if (count($errors) > 0)

        <div class="alert alert-primary" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach

            </ul>
        </div>


    @endif

    <div class="form-group">

        <label for="cedula"> Cedula del Cliente:</label>
        <input type="text" class="form-control" name="cedula"
            value="{{ isset($cliente->cedula) ? $cliente->cedula : old('cedula') }}" id="cedula">

        <br>
        <label for="nombre"> Nombre:</label>
        <input type="text" class="form-control" name="nombre"
            value="{{ isset($cliente->nombre) ? $cliente->nombre : old('nombre') }}" id="nombre">
        <br>

        <label for="edad"> Edad:</label>
        <input type="text" class="form-control" name="edad"
            value="{{ isset($cliente->edad) ? $cliente->edad : old('edad') }}" id="edad">
        <br>

        <label for="email"> Email:</label>
        <input type="email" class="form-control" name="email"
            value="{{ isset($cliente->email) ? $cliente->email : old('email') }}" id="email">
        <br>

        <label for="direccion"> Dirección:</label>
        <input type="text" class="form-control" name="direccion"
            value="{{ isset($cliente->direccion) ? $cliente->direccion : old('direccion') }}" id="direccion">
        <br>

        <label for="telefono"> Teléfono:</label>
        <input type="text" class="form-control" name="telefono"
            value="{{ isset($cliente->telefono) ? $cliente->telefono : old('telefono') }}" id="telefono">
        <br>

        <input class="btn btn-success" type="submit" value="{{ $modo }} Cliente">

        <a href="{{ url('cliente/') }}" class="btn btn-primary"> Volver</a>
        <br>

    </div>
</div>
