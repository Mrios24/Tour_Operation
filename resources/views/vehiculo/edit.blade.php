@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ url('/vehiculo/' . $vehiculo->codigo) }}" method="post" enctype="miltipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('vehiculo.form', ['modo' => 'Editar'])



        </form>
    </div>
@endSection
