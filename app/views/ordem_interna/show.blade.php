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

							<th class="well">Prazo de conclusão</th>
							<td>{{ $ordem_interna->prazo }} dia(s)</td>
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
				</table>
			</div>

		</body>
	</html>