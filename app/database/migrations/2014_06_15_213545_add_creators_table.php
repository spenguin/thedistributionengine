<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'creators' );
        
        Schema::create( 'creators', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->string( 'slug' );
            $table->text( 'shortDescription' );
            $table->longtext( 'description' );
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
		Schema::drop( 'creators' );
	}

}
