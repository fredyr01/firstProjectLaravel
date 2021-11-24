@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>
    <a href="{{route('projects.create')}}">Crear proyecto</a>

    <ul>

        {{-- If con blade --}}
        {{-- @if($portfolio) --}}
            {{-- For each con blade --}}
            {{-- @foreach ($portfolio as $portfolioItem) --}}
                {{-- <li>{{ $portfolioItem['title'] }}</li> --}}
            {{-- @endforeach --}}
        {{-- @else --}}
            {{-- <li>No hay proyectos para mostrar</li> --}}
        {{-- @endif --}}

        {{-- Isset -- para comprobar si existe la variable, con blade --}}
        {{-- @isset($portfolio) --}}
            {{-- For each con blade --}}
            {{-- @foreach ($portfolio as $portfolioItem) --}}
                {{-- <li>{{ $portfolioItem['title'] }}</li> --}}
            {{-- @endforeach --}}
        {{-- @else
            <li>No hay proyectos para mostrar</li>
        @endisset --}}

        {{-- For else con blade --}}
        @forelse ($projects as $project)
            <li><a href="{{route('projects.show', $project)}}">{{$project->title}}</a>
                {{-- <br>
                <small>{{$portfolioItem->description}}</small><br>
                {{ $portfolioItem->created_at->diffForHumans()}} --}}
            {{-- <pre>{{var_dump($loop)}}</pre> --}}
            {{-- <small>{{$loop->last ? 'Es el último' : ''}}</small> --}}
            </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{-- Paginación --}}
        {{-- {{$projects->links()}} --}}
    </ul>
@endsection