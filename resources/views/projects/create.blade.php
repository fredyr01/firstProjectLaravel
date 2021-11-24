@extends('layout')

@section('title','Crear proyecto')

@section('content')
    <h1>Crear nuevo proyecto</h1>
        <form action="{{ route('projects.store') }}" method="POST">
            @csrf
            <label for="">Titulo del proyecto <br>
                <input type="text" name="title">
            </label>
            <br>
            <label for="">URL del proyecto <br>
                <input type="text" name="url">
            </label>
            <br>
            <label for="">Descripción del proyecto <br>
                <textarea name="description"></textarea>
            </label>
            <br>
            <button>Guardar</button>
        </form>
@endsection