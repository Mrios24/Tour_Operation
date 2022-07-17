@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ url('/gastos/' . $gasto->codigo) }}" method="post" enctype="miltipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('gastos.form', ['modo' => 'Editar'])



        </form>
    </div>
@endSection
