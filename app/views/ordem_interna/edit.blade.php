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
                    {{ Form::button('Relação de Serviços', ['class'=>'btn btn-info','data-toggle'=>'modal', 'data-target'=>'#myModal']) }}                 
                    {{ link_to_route('osi.index', 'Voltar', null, ['class'=>'btn btn-danger']) }}
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>





<!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Relação de Serviços ordem: {{ $ordem_interna->id }}</h4>
      </div>
      <div class="modal-body">
          <iframe src="/osi/servicos/{{ $ordem_interna->id }}" class="col-md-12" frameborder="0" height="500" allowtransparency="true"></iframe>  
      </div>
      <div class="modal-footer">
      </div>
    </div>
    <!-- /.modal-content -->
  </div>
  <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

@stop