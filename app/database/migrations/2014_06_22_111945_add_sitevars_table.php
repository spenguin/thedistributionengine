<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSitevarsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'sitevars' );
		
		Schema::create( 'sitevars', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
			$table->text( 'value' );
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'sitevars' );
	}

}
