<!DOCTYPE html>
	<html>
		<head>
			<title>Ordem Interna</title>
			{{ HTML::style('assets/css/bootstrap.css') }}
		</head>
		<body>
			<div class="col-md-9">
				<div class="well">
					<h2 class="text-center">Frizelo Frigorificos Ltda.</h2>
				</div>
				<table class="table table-bordered">
						<tr>
							<th class="well">Numero da Ordem Interna</th>
							<td>{{ $ordem_interna->id }}</td>

							<th class="well">Equipamento:</th>
							<td>{{ $ordem_interna->equipamento_id }}</td>
						</tr>
						<tr>
							<th class="well">Data: </th>
							<td>{{ $ordem_interna->data }}</td>

							<th class="well">Requisitante: </th>
							<td>{{ $ordem_interna->data }}</td>
						</tr>

						<tr>
							<th class="well">Setor Requisitante: </th>
							<td>{{ $ordem_interna->setorRequisitante->descricao }}</td>
							<th class="well">Setor Responsavel: </th>
							<td>{{ $ordem_interna->setorResponsavel->descricao }}</td>
						</tr>
						<tr>
							<th colspan="4" class="well text-center">Descrição do Serviço</th>
						</tr>
						<tr>
							<td colspan="4">{{ $ordem_interna->obs }}</td>
						</tr>
						<tr>
							<td colspan="4">
									<table class="table">
											<thead>
												<tr>
													<th>Serviço</th>
													<th>Prazo</th>
												</tr>
											</thead>
											<tbody>
												@foreach($ordem_interna->servicos as $servico)
												<tr>
													<td>{{ $servico->descricao }}</td>
													<td>{{ OrdemInternaServico::prazo($servico->id) }}</td>
												</tr>
												@endforeach
											</tbody>
										</table>

							</td>
						</tr>
				</table>
			</div>

		</body>
	</html>