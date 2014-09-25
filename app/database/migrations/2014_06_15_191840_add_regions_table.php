<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRegionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'regions' );
        
        Schema::create( 'regions', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->string( 'slug' );
            $table->longtext( 'description' );
            $table->integer( 'parentId' );
            $table->integer( 'status' );
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
		Schema::drop( 'regions' );
	}

}
