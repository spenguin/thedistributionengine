<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssettypesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'assettypes' );
        
        Schema::create( 'assettypes', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->integer( 'status' );
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop( 'assettypes' );
	}

}
