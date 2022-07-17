@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <form action=" {{ url('/gastos') }} " method="post" enctype="miltipart/form-data">
                @csrf
                @include('gastos.form', ['modo' => 'Guardar'])


            </form>

        </div>
    </div>
@endSection
