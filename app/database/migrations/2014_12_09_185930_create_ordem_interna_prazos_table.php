<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdemInternaPrazosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordem_interna_prazos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('servico_id');
			$table->integer('prazo')->nullable();
			$table->string('justificativa');
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
		Schema::dropIfExists('ordem_interna_prazos');
	}

}
