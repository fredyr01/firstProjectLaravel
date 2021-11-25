@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h1>Editar proyecto</h1>

    @include('partials.validation-errors')

        <form action="{{ route('projects.update', $project) }}" method="POST">
            @method('PATCH')

            @include('projects._form',['btnText' => 'Actualizar'])

        </form>
@endsection