@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <form action=" {{ url('/cliente') }} " method="post" enctype="miltipart/form-data">
                @csrf
                @include('clientes.form', ['modo' => 'Guardar'])


            </form>

        </div>
    </div>
@endSection
