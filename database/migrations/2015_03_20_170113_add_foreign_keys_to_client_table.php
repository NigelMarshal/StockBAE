<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToClientTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('client', function(Blueprint $table)
		{
			$table->foreign('account_no', 'client_ibfk_1')->references('account_no')->on('account')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('client', function(Blueprint $table)
		{
			$table->dropForeign('client_ibfk_1');
		});
	}

}
