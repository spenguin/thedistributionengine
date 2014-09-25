<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'assets' );
		
		Schema::create( 'assets', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->integer( 'assetTypeId' );
            $table->string( 'originalName' );
            $table->integer( 'filesize' );
			$table->integer( 'ownerId' );
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
		Schema::drop( 'assets' );
	}

}
