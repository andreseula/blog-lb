@extends('layout')

@section('title','Portfolio | '. $projects->title)

@section('contenido')
<div class="container-fluid">
	<div class="jumbotron">
    <h1>{{__('Projects')}}</h1>
    </div>
@include('partials.sessions-status')
	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                	<h3><u>Titulo:</u></h3>{{$projects->title}}
                </div>
                <div class="card-body">
					<p><u>Descipción:</u><br>{{$projects->description}}</p>
					<p><u>URL: </u><br>{{$projects->url}}</p>
					<small><strong>Creado:</strong> {{$projects->created_at->format('d-m-Y')}}</small><br>
					<small><strong>Modificado:</strong> {{$projects->created_at->diffForHumans()}}</small>
				<br>
				<hr>
				@auth
					<form method="POST" action="{{ route('projects.destroy', $projects) }}">
						@csrf @method('DELETE')
						<a href="{{ route('projects.edit', $projects)}}" class="btn btn-primary mb-2">Editar</a>
						<button class="btn btn-danger mb-2">Eliminar</button>
					</form>
				@endauth
					<a href="{{ route('projects.index', $projects)}}" class="btn btn-secondary mb-2">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
