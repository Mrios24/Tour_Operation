@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ url('/proveedor/' . $proveedor->codigo) }}" method="post" enctype="miltipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('proveedor.form', ['modo' => 'Editar'])



        </form>
    </div>
@endSection
