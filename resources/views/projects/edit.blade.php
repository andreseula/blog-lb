@extends('layout')

@section('title','Editar Proyecto')

@section('contenido')
<div class="container-fluid">
<div class="jumbotron">
	<H1><u>Editar Proyecto </u></H1>
</div>
@include('partials.sessions-status')

	<form  method="POST" action="{{route('projects.update',$projects)}}">
		@method('PATCH')
		<div class="col-12">
			<div class="card-body">
				@include('partials.validation-error')

				@include('projects._form')
				<div class="row justify-content-center py-2" >
					<button  type="submit" class="btn btn-warning mb-2">ACTUALIZAR</button>
					<a href="{{route('projects.index', $projects)}}" class="btn btn-secondary mb-2">Volver</a>
				</div>
			</div>
		</div>
	</form>
</div>
@endsection
