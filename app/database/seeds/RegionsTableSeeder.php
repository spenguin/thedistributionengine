<?php
    
class RegionsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'regions' )->insert(
            array(
                array(
                    'name'  => 'North America',
                    'slug'  => 'north-america',
                    'description'   => '',
                    'parentId'      => 0
                ),
                array(
                    'name'  => 'Canada',
                    'slug'  => 'canada',
                    'description'   => '',
                    'parentId'      => 1
                ),            
                array(
                    'name'  => 'United States of America',
                    'slug'  => 'unites-states-of-america',
                    'description'   => '',
                    'parentId'      => 1
                )
            )
        );
    }
}