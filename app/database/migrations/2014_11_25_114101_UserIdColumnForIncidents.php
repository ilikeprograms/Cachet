<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UserIdColumnForIncidents extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			$table->unsignedInteger('user_id')->nullable();

			$table->foreign('user_id')->references('id')->on('users')->onDelete('SET NULL')->onUpdate('NO ACTION');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('incidents', function(Blueprint $table)
		{
			$table->dropColumn('user_id');
		});
	}

}
