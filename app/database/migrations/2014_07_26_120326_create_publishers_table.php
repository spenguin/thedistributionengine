<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePublishersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'publishers' );
		
		Schema::create( 'publishers', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->string( 'slug' );
            $table->integer( 'userId' );
            $table->longtext( 'address' );
            $table->integer( 'regionId' )->nullable();
			$table->boolean( 'status' );
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
        Schema::drop( 'publishers' );
	}

}
