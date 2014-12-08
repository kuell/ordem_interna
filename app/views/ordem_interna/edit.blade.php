@extends('dashboard')

@section('main')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Alterar Ordem Interna</h3>
	</div>
	<div class="panel-body">
		<div class="col-md-12">
			{{ Form::model($ordem_interna, array('method'=>'PATCH', 
											 'route'=>array('osi.update', $ordem_interna->id))) }}
				@include('ordem_interna.form')
				
				<div class="col-md-12">
					{{ Form::submit('Alterar', ['class'=>'btn btn-primary']) }}
					{{ link_to_route('osi.index', 'Voltar', null, ['class'=>'btn btn-danger']) }}
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop