<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemInternaServicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordem_interna_servicos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('ordem_interna_id');
			$table->string('descricao');
			$table->string('situacao')->default('aberto');
			$table->string('motivo_status')->nullable();
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('ordem_interna_servicos');
	}

}
