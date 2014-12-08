@extends('dashboard')

@section('main')

<div class="panel panel-primary">
	<div class="panel-heading">
		<h3 class="panel-title">Novo ordem_interna</h3>
	</div>
	<div class="panel-body">
		<div class="col-md-12">
			{{ Form::open(array('route'=>'osi.store', 'rule'=>'form')) }}
				@include('ordem_interna.form')
				
				<div class="col-md-12">
					{{ Form::submit('Gravar', ['class'=>'btn btn-primary']) }}
					{{ link_to_route('osi.index', 'Voltar', null, ['class'=>'btn btn-danger']) }}
				</div>
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop