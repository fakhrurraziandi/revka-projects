<?php

use Illuminate\Database\Seeder;

class ServiceCarouselTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('service_carousel')->delete();
        
        \DB::table('service_carousel')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Service Carousel 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veniam itaque laudantium architecto eaque vero.',
                'image_file' => 'uploads/17d8da815fa21c57af9829fb0a869602.jpg',
                'created_at' => '2020-03-26 13:01:46',
                'updated_at' => '2020-03-26 13:05:44',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Service Carousel 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem veniam itaque laudantium architecto eaque vero.',
                'image_file' => 'uploads/1013c8b99e603831ad123eab4b27660f.jpg',
                'created_at' => '2020-03-26 13:02:11',
                'updated_at' => '2020-03-26 13:06:28',
            ),
        ));
        
        
    }
}