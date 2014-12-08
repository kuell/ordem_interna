<?php

Class OrdemInterna extends Eloquent{
	protected $guarded = array();

	public function getDataAttribute(){
		$d = date('d/m/Y', strtotime($this->attributes['data']));

		return $d;
	}

	public function setorResponsavel(){
		return $this->belongsTo('Setor', 'setor_responsavel_id');
	}

	public function setorRequisitante(){
		return $this->belongsTo('Setor', 'setor_requisitante_id');
	}

}
