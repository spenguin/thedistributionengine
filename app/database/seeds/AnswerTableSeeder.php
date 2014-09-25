<?php
    
class AnswerTableSeeder extends Seeder
{
    public function run()
    {
        DB::table( 'answers' )->insert(
            array(
                array(
                    'collection'    => 'publisher',
                    'entry'         => 'pending',
                    'answer'        => '<p>Thank you for registering to use The Distribution Engine service. As soon as your registration has been confirmed, you will receive a confirmation email.</p>'
                ),
                array(
                    'collection'    => 'shop',
                    'entry'         => 'pending',
                    'answer'        => '<p>Thank you for registering to use The Distribution Engine service. As soon as your registration has been confirmed, you will receive a confirmation email.</p>'
                )                
            )
        );
    }
}