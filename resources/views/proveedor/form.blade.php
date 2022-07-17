<div class="p-3 mb-2 bg-secondary text-white">
    <h1> Formulario Proveedores</h1>

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

        <label for="cedula"> Codigo del Proveedor:</label>
        <input type="text" class="form-control" name="codigo"
            value="{{ isset($proveedor->codigo) ? $proveedor->codigo : old('codigo') }}" id="codigo">

        <br>
        <label for="nombre"> Nombre:</label>
        <input type="text" class="form-control" name="nombre"
            value="{{ isset($proveedor->nombre) ? $proveedor->nombre : old('nombre') }}" id="nombre">
        <br>

       

        <label for="email"> Email:</label>
        <input type="email" class="form-control" name="email"
            value="{{ isset($proveedor->email) ? $proveedor->email : old('email') }}" id="email">
        <br>

        

        <label for="telefono"> Teléfono:</label>
        <input type="text" class="form-control" name="telefono"
            value="{{ isset($proveedor->telefono) ? $proveedor->telefono : old('telefono') }}" id="telefono">
        <br>

        <label for="detalle"> Detalle:</label>
        <input type="text" class="form-control" name="detalle"
            value="{{ isset($proveedor->detalle) ? $proveedor->detalle : old('detalle') }}" id="detalle">
        <br>

        <input class="btn btn-success" type="submit" value="{{ $modo }} proveedor">

        <a href="{{ url('proveedor/') }}" class="btn btn-primary"> Volver</a>
        <br>

    </div>
</div>