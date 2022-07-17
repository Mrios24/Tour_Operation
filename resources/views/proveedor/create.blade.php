@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <form action=" {{ url('/proveedor') }} " method="post" enctype="miltipart/form-data">
                @csrf
                @include('proveedor.form', ['modo' => 'Guardar'])


            </form>

        </div>
    </div>
@endSection
