
<div class="p-3 mb-2 bg-secondary text-white">
    <h1> Formulario Gastos</h1>

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

        <label for="codigo"> Codigo gasto:</label>
        <input type="text" class="form-control" name="codigo"
            value="{{ isset($gasto->codigo) ? $gasto->codigo : old('codigo') }}" id="codigo">

        <br>
        <label for="tipo_gasto"> Tipo de gasto:</label>
        <input type="text" class="form-control" name="tipo_gasto"
            value="{{ isset($gasto->tipo_gasto) ? $gasto->tipo_gasto : old('tipo_gasto') }}" id="tipo_gasto">
        <br>

        <label for="fecha"> Fecha:</label>
        <input type="date" class="form-control" name="fecha"
            value="{{ isset($gasto->fecha) ? $gasto->fecha : old('fecha') }}" id="fecha">
        <br>

        <label for="descripcion"> Descripcion:</label>
        <input type="text" class="form-control" name="descripcion"
            value="{{ isset($gasto->descripcion) ? $gasto->descripcion : old('descripcion') }}" id="descripcion">
        <br>

        <label for="vehiculo"> Codigo vehiculo:</label>
        <input type="text" class="form-control" name="vehiculo"
            value="{{ isset($gasto->vehiculo) ? $gasto->vehiculo : old('vehiculo') }}" id="vehiculo">
        <br>

        <input class="btn btn-success" type="submit" value="{{ $modo }} Gastos">

        <a href="{{ url('gastos/') }}" class="btn btn-primary"> Volver</a>
        <br>

    </div>
</div>
