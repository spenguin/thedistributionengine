<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists( 'users' );
		
		Schema::create( 'users', function($table){
            $table->increments( 'id' );
            $table->string( 'name' );
            $table->string( 'username' );
            $table->string( 'email' );
            $table->string( 'pwhash' );
            $table->string( 'nonce' );
            $table->integer( 'userTypeId' );
            $table->boolean( 'status' )->default( 0 );
            $table->string( 'remember_token' )->nullable();
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
		Schema::drop( 'users' );
	}

}
