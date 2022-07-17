@extends('layouts.app')

@section('content')
    <div class="container">

        <form action="{{ url('/chofer/' . $chofer->codigo) }}" method="post" enctype="miltipart/form-data">
            @csrf
            {{ method_field('PATCH') }}
            @include('chofer.form', ['modo' => 'Editar'])



        </form>
    </div>
@endSection
