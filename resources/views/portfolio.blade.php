@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Portfolio</h1>

    <ul>
        {{--  Haciendolo normal con php --}}
        {{-- <?php foreach ($portfolio as $portfolioItem) {
            echo "<li>".$portfolioItem['title']."</li>";
        } ?> --}}

        {{-- If con blade --}}
        @if($portfolio)
            {{-- For each con blade --}}
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endif

        {{-- Isset -- para comprobar si existe la variable, con blade --}}
        @isset($portfolio)
            {{-- For each con blade --}}
            @foreach ($portfolio as $portfolioItem)
                <li>{{ $portfolioItem['title'] }}</li>
            @endforeach
        @else
            <li>No hay proyectos para mostrar</li>
        @endisset

        {{-- For else con blade --}}
        @forelse ($portfolio as $portfolioItem)
            <li>{{ $portfolioItem['title'] }}
            {{-- <pre>{{var_dump($loop)}}</pre> --}}
            <small>{{$loop->last ? 'Es el último' : ''}}</small>
            </li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
    </ul>
@endsection