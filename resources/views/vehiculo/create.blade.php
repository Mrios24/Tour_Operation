@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <form action=" {{ url('/vehiculo') }} " method="post" enctype="miltipart/form-data">
                @csrf
                @include('vehiculo.form', ['modo' => 'Guardar'])


            </form>

        </div>
    </div>
@endSection
