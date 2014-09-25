<?php
    
class UsersTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'users' )->insert(
            array(
                array(
                    'name'      => 'John Anderson',
                    'username'  => 'spenguinAdmin',
                    'email'     => 'info@soaringpenguin.com',
                    'pwhash'    => Hash::make( 'zaft1g4dm1n' ),
                    'nonce'     => md5( time() ),
                    'userTypeId'=> 1,
                    'status'    => 1
                ),
                array(
                    'name'      => 'John Anderson',
                    'username'  => 'janderson',
                    'email'     => 'info@soaringpenguinpress.com',
                    'pwhash'    => Hash::make( 'zaft1gpr355' ),
                    'nonce'     => md5( time() ),
                    'userTypeId'=> 3,
                    'status'    => 1
                )
            )
        );
    }
}