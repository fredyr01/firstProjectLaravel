@extends('layout')

@section('title','Home')

@section('content')
    <h1>Home</h1>
    {{-- Se ejecuta en @auth solo si existe un usuario autenticado --}}
    @auth
        {{auth()->user()->name}}
    @endauth
@endsection