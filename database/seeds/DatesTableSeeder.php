<?php

use Illuminate\Database\Seeder;

class DatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('dates')->insert([
            'user_name' => 'Test',
            'site_name' => 'Test Site',
            'picture_rate' => '3.0',
            'cool_rate'=>'2.5',
            'repeat_rate'=>'1.5',
            'nice_rate'=>'2.0',
            'review'=>'Test Review',
        ]);

        //
    }
}
