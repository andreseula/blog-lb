@extends('layout')

@section('title','Nuevo Proyecto')

@section('contenido')
<div class="container-fluid">
	<div class="jumbotron">
		<H1><u>Nuevo Proyecto</u></H1>
	</div>
	@include('partials.sessions-status')

	<form  method="POST" action="{{route('projects.store')}}">
		<div class="col-12">
			<div class="card-body">

				@include('partials.validation-error')

				@include('projects._form')
				<div class="row justify-content-center py-2">
					<button  type="submit" class="btn btn-success mb-2">GUARDAR</button>
					<a href="{{route('projects.index', $projects)}}" class="btn btn-secondary mb-2">Volver</a>
				</div>
			</div>
		</div>
	</form>
</div>












@endsection
