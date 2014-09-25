<?php
    
class UsertypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'usertypes' )->insert(
            array(
                array(
                    'name'  => 'Admin',
                    'slug'  => 'admin',
                    'description'   => 'Administration type'
                ),
                array(
                    'name'  => 'Shop',
                    'slug'  => 'shop',
                    'description'   => 'Comic Shop type'
                ),            
                array(
                    'name'  => 'Publisher',
                    'slug'  => 'publisher',
                    'description'   => 'Publisher type'
                ),
            )
        );
    }
}