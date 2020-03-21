@extends('layout')

@section('title','Portfolio')

@section('contenido')
<div class="container-fluid">
    <div class="jumbotron">
        <h1>{{__('Portfolio')}}</h1>
    </div>

    <div id="lip" class="row justify-content-center">
        <div class="col-6">
            @auth
                <h3><a href="{{route('projects.create')}}">Nuevo Proyecto</a></h3>
            @endauth
<strong>@include('partials.sessions-status')</strong>
            <hr>
                <ul class="list-group">
                    @forelse ($projects as $projecto)
                        <li class="list-group-item border-o mb-2 shadow-sm">
                            <a class="d-flex"
                            href="{{route('projects.show', $projecto) }}">
                            <article>{{ $projecto->title }}</article>
                            <article> {{ $projecto->created_at->format(' - d/m/Y ') }}</article>
                            </a>
                        </li>
                    @empty
                        <li>No hay Proyectos para mostrar</li>
                    @endforelse
                </ul>
        {{$projects->links()}}
        </div>
    </div>

@endsection