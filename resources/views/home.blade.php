@extends('layout')

@section('title','HOME')



@section('contenido')
<div class="container-fluid">
	<div class="jumbotron">
		<h1>QUARANTINE - CUARENTENA</h1>
	</div>
	<div class="row">
		<div class="col-12" id="usuario">
			@auth
				BIENVENID@ <strong>{{ auth()->user()->name }}</strong>
				<br><hr>
			@endauth
		</div>
		<div class="col-md-4">
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
		</div>
		<div class="col-md-4">
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
		</div>
		<div class="col-md-4">
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
			<h1><u><strong>STAY AT HOME</strong></u></h1>
			<h1><u><strong>QUEDATE EN CASA</strong></u></h1>
		</div>
	</div>
</div>
@endsection