<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnswersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'answers' );
		
		Schema::create( 'answers', function($table){
            $table->increments( 'id' );
            $table->string( 'collection' );
            $table->string( 'entry' );
            $table->longtext( 'answer' );
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::drop( 'answers' );
	}

}
