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
        [
            'user_name' => 'crows_before_hoes',
            'site_name' => 'tinder',
            'picture_rate' => '3.0',
            'cool_rate'=>'2.5',
            'repeat_rate'=>'1.5',
            'nice_rate'=>'2.0',
            'review'=>'Jon seemed nice enough online. I found it weird that he wore all black and took his dog everywhere we went.',
            'picture_path1'=>'http://i.imgur.com/Zg4Wz3u.jpg?1',
            'picture_path2'=>'http://i.huffpost.com/gen/2808950/images/o-JON-SNOW-facebook.jpg',
            'picture_path3'=>'https://s.yimg.com/uu/api/res/1.2/SU8AcfDWpwBTfYEgc0etgA--/aD0xMTE4O3c9NjMwO3NtPTE7YXBwaWQ9eXRhY2h5b24-/http://l.yimg.com/os/publish-images/lifestyles/2015-06-16/35d08970-144b-11e5-ae4d-53c06b2c9bf1_Jon-Snow-Game-of-Thrones-Tinder.jpg'
        ],
          [
                    'user_name' => 'door_holder69',
                    'site_name' => 'tinder',
                    'picture_rate' => '8.0',
                    'cool_rate'=>'2.5',
                    'repeat_rate'=>'7.5',
                    'nice_rate'=>'8.0',
                    'review'=>'Hodor wasnt much of a talker... maybe he was nervous? He just kept repeating his name the whole time. He was really good at holding the door open though.',
                    'picture_path1'=>'https://s4.scoopwhoop.com/anj/ewfgd/334132399.jpg',
                    'picture_path2'=>'http://images-cdn.9gag.com/photo/a3Bmwdv_700b.jpg',
                    'picture_path3'=>'https://i1.wp.com/www.forevergeek.com/wp-content/media/2013/06/Game-of-Thrones-Dating-Profiles-Hodor1.png?resize=350%2C200'
                ],
                [
                            'user_name' => 'KINGSLAYER',
                            'site_name' => 'plenty of fish',
                            'picture_rate' => '9.0',
                            'cool_rate'=>'8.0',
                            'repeat_rate'=>'3.0',
                            'nice_rate'=>'5.0',
                            'review'=>'Jaime was perfect! Too perfect... So I lurked his facebook and found the post attached... WTF!!!!',
                            'picture_path1'=>'http://laughingsquid.com/wp-content/uploads/2013/04/tumblr_mkfdn7dJE21qzx3jto1_500.png',
                            'picture_path2'=>'http://38.media.tumblr.com/f7209174197c7423fd3e1017c60c758b/tumblr_nc5kw5hoZL1qdftrio3_500.jpg',
                            'picture_path3'=>'http://i.imgur.com/mv7dWKI.jpg'
                    ]
                    ]);
    }
}
