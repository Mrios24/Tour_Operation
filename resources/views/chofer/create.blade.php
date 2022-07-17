@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">


            <form action=" {{ url('/chofer') }} " method="post" enctype="miltipart/form-data">
                @csrf
                @include('chofer.form', ['modo' => 'Guardar'])


            </form>

        </div>
    </div>
@endSection
