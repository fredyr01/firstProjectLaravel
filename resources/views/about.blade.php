@extends('layout')

@section('title','About')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-between align-items-center">
        <div class="col-12 col-lg-6">
            <img class="img-fluid mb-4" src="/img/about.svg" alt="Quién soy">
        </div>
        <div class="col-12 col-lg-6">
            <h1 class="display-4 text-primary">
                {{-- @lang('home') --}}
                Quién soy
            </h1>
            <p class="lead text-secondary">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Consequatur saepe pariatur velit, enim eligendi laborum nesciunt.
            </p>
            <a class="btn btn-lg btn-block btn-primary"
                href="{{route('contact')}}">Contáctame</a>
            <a class="btn btn-lg btn-block btn-outline-primary"
                href="{{route('projects.index')}}">Portafolio</a>
        </div>
    </div>
</div>
@endsection