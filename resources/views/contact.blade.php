@extends('layout')

@section('title','Contact')

@section('content')
    <h1>{{ __('Contact')}}</h1>
    {{-- {{var_dump($errors->any())}}
    Me muestra false si hay error o true si hay errores de validación --}}
    {{-- @if ($errors->any()) --}}
        {{-- {{ var_dump($errors->all()) }} --}}
        {{-- Muestra array con los errores de validación --}}

        {{-- For each que muestra todos los errores de validación --}}
        {{-- <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul> --}}

        {{-- Para mostrar el primer error
        {{$errors->first('name')}} --}}
        {{-- Para mostrarlo en cada input, se coloca en cada uno especificando el name --}}

    {{-- @endif --}}

    <form method="POST" action="{{ route('contact') }}">
        @csrf
        <input name="name" placeholder="Nombre ... " value="{{ old('name') }}"><br>
        {!! $errors->first('name','<small>:message</small><br>') !!} <br>
        <input name="email" type="email" placeholder="Correo ... " value="{{ old('email') }}"><br>
        {!! $errors->first('email','<small>:message</small><br>') !!} <br>
        <input name="subject" placeholder="Asunto ... " value="{{ old('subject') }}"><br>
        {!! $errors->first('subject','<small>:message</small><br>') !!} <br>
        <textarea name="content" placeholder="Mensaje ... ">{{ old('content') }}</textarea><br>
        {!! $errors->first('content','<small>:message</small><br>') !!} <br>
        <button>@lang('Send')</button>
    </form>
@endsection