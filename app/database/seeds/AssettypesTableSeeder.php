<?php
    
class AssetTypesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'assettypes' )->insert(
            array(
                array(
                    'name'  => 'logo',
                    'status'      => 1
                ),
            )
        );
    }
}