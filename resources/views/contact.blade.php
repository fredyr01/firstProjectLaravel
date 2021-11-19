@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>
    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre ... " value="Fredy Rios"><br><br>
        <input name="email" type="email" placeholder="Correo ... " value="fredyrios01@gmail.com"><br><br>
        <input name="subject" placeholder="Asunto ... " value="Asunto de prueba"><br><br>
        <textarea name="content" placeholder="Mensaje ... ">Mensaje de prueba</textarea><br><br>
        <button>Enviar</button>
    </form>
@endsection