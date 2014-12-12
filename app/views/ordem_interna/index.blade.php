@extends('dashboard')

@section('main')
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3 class="panel-title">Listagem de ordem_internas</h3>
		</div>
		<div class="panel-body">
			<div class="col-md-12">
				<table class="table table-hover" id="dataTables-example">
					<thead>
						<tr class="well">
							<th>#</th>
							<th>Data</th>
							<th>Setor Responsavel</th>
							<th>Requisitante</th>
							<th>Setor Requisitante</th>
							<th>Equipamento</th>
						<th>
								{{ link_to_route('osi.create', 'Adicionar', null, ['class'=>'btn btn-success']) }}
							</th> 
						</tr>
					</thead>
					<tbody>
						@foreach ($ordem_internas as $ordem_interna) 
						<tr>
							<td>{{ $ordem_interna->id }}</td>
							<td>{{ $ordem_interna->data }}</td>
							<td>{{ $ordem_interna->setorResponsavel->descricao }}</td>
							<td>{{ $ordem_interna->requisitante }}</td>
							<td>{{ $ordem_interna->setorRequisitante->descricao }}</td>
							<td>{{ $ordem_interna->equipamento_id }}</td>
							<td>
								<div class="btn-group btn-group-xs" role="group" aria-label="...">
									<a href="/osi/{{ $ordem_interna->id }}/edit " class="btn btn-info">
										<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
									</a> 
								  	
								  	<a href="#" class="btn btn-primary" onclick="open('/osi/{{ $ordem_interna->id }} ','Print','channelmode=true')">
								  		<span class="glyphicon glyphicon-print" aria-hidden="true"></span>
								  	</a>

								  	<a href="/osi/encaminhar/{{ $ordem_interna->id }}" class="btn btn-warning disabled">
								  		<span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
								  	</a> 
								</div>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>
				</div>
		</div>
	</div>
	<script>
    	$(document).ready(function() {
        	$('#dataTables-example').dataTable();
    	});
    </script>

@stop