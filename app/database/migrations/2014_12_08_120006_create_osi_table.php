<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOsiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ordem_internas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->datetime('data');
			$table->integer('setor_responsavel_id');
			$table->string('requisitante');
			$table->integer('setor_requisitante_id');
			$table->integer('prazo');
			$table->text('obs');
			$table->string('status')->default('aberto');
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
		Schema::dropIfExists('ordem_internas');
	}

}
