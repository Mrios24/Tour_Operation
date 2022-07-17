
<div class="p-3 mb-2 bg-secondary text-white">
    <h1> Formulario chofer</h1>

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

        <label for="codigo"> Codigo chofer:</label>
        <input type="text" class="form-control" name="codigo"
            value="{{ isset($chofer->codigo) ? $chofer->codigo : old('codigo') }}" id="codigo">


        <label for="nombre"> Nombre:</label>
        <input type="text" class="form-control" name="nombre"
            value="{{ isset($chofer->nombre) ? $chofer->nombre : old('nombre') }}" id="nombre">
        <br>

        <br>
        <label for="tipo_chofer"> Tipo de chofer:</label>
        <input type="text" class="form-control" name="tipo_chofer"
            value="{{ isset($chofer->tipo_chofer) ? $chofer->tipo_chofer : old('tipo_chofer') }}" id="tipo_chofer">
        <br>

        
        <br>

        <input class="btn btn-success" type="submit" value="{{ $modo }} Chofer">

        <a href="{{ url('chofer/') }}" class="btn btn-primary"> Volver</a>
        <br>

    </div>
</div>
