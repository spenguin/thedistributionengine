<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('RegionsTableSeeder');
		$this->call( 'UsertypesTableSeeder' );
		$this->call( 'UsersTableSeeder' );
		$this->call( 'AssettypesTableSeeder' );
		$this->call( 'AnswerTableSeeder' );
		$this->call( 'SitevarsTableSeeder' );
	}

}
