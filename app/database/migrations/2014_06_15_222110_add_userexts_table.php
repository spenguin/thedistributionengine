<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserextsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'userexts' );
		
		Schema::create( 'userexts', function($table){
            $table->increments( 'id' );
            $table->integer( 'userId' );
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
		Schema::drop( 'userexts' );
	}

}
