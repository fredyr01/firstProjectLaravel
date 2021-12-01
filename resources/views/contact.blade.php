@extends('layout')

@section('title','Contact')

@section('content')
<div class="container ">
    <div class="row">
        <div class="col-12 col-sm-10 col-lg-6 mx-auto">
            
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

        @include('partials.session-status')
    
        <form class="bg-white shadow rounded py-3 px-4"
        method="POST" action="{{ route('messages.store') }}">
            @csrf
            <h1 class="display-5">{{ __('Contact')}}</h1>
            <div class="form-group">
                <label for="name">Nombre</label>
                <input class="form-control bg-light shadow-sm  
                @error('name') is-invalid @else border-0 @enderror"
                id="name" name="name" placeholder="Escribe aquí tu nombre ... " value="{{ old('name') }}">
                {{-- {!! $errors->first('name','<small>:message</small><br>') !!} <br> --}}
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control bg-light shadow-sm
                @error('email') is-invalid @else border-0 @enderror"
                id="email" name="email" type="email" placeholder="Escribe aquí tu correo ..." value="{{old('email')}}">
                {{-- {!! $errors->first('email','<small>:message</small><br>') !!} <br> --}}
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="subject">Asunto</label>
                <input class="form-control bg-light shadow-sm
                @error('subject') is-invalid @else border-0 @enderror"
                id="subject" name="subject" placeholder="Escribe aquí tu asunto ... " value="{{ old('subject') }}">
                {{-- {!! $errors->first('subject','<small>:message</small><br>') !!} <br> --}}
                @error('subject')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Contenido</label>
                <textarea class="form-control bg-light shadow-sm
                @error('subject') is-invalid @else border-0 @enderror"
                id="content" name="content" placeholder="Escribe aquí tu mensaje ...">{{ old('content')}}</textarea>
                {{-- {!! $errors->first('content','<small>:message</small><br>') !!} <br> --}}
                @error('content')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button>
        </form>
        </div>
    </div>
    </div>
@endsection