<?php

use Illuminate\Database\Seeder;

class HeaderCarouselTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('header_carousel')->delete();
        
        \DB::table('header_carousel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Revka',
                'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente veniam provident aperiam atque facere recusandae dicta fugit unde!',
                'link_url' => '#',
                'link_text' => 'Join Us',
                'image_file' => 'uploads/f490c742cd8318b8ee6dca10af2a163f.jpg',
                'created_at' => '2020-03-26 11:49:00',
                'updated_at' => '2020-03-26 14:44:01',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Revka',
                'subtitle' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sapiente veniam provident aperiam atque facere recusandae dicta fugit unde!',
                'link_url' => '#',
                'link_text' => 'Join Us',
                'image_file' => 'uploads/435d6ab1ba16ba7e05e09d9728bc36ca.jpg',
                'created_at' => '2020-03-26 11:58:38',
                'updated_at' => '2020-03-26 14:44:11',
            ),
        ));
        
        
    }
}