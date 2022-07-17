
<div class="p-3 mb-2 bg-secondary text-white">
    <h1> Formulario vehiculo</h1>

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

        <label for="codigo"> Codigo vehiculo:</label>
        <input type="text" class="form-control" name="codigo"
            value="{{ isset($vehiculo->codigo) ? $vehiculo->codigo : old('codigo') }}" id="codigo">


        <label for="detalle"> Detalle:</label>
        <input type="text" class="form-control" name="detalle"
            value="{{ isset($vehiculo->detalle) ? $vehiculo->detalle : old('detalle') }}" id="detalle">
        <br>

        <br>
        <label for="tipo_vehiculo"> Tipo de vehiculo:</label>
        <input type="text" class="form-control" name="tipo_vehiculo"
            value="{{ isset($vehiculo->tipo_vehiculo) ? $vehiculo->tipo_vehiculo : old('tipo_vehiculo') }}" id="tipo_vehiculo">
        <br>

        
        <br>

        <input class="btn btn-success" type="submit" value="{{ $modo }} Vehiculo">

        <a href="{{ url('vehiculo/') }}" class="btn btn-primary"> Volver</a>
        <br>

    </div>
</div>
