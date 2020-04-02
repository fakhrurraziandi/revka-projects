<?php

use Illuminate\Database\Seeder;

class ClientTestimonialTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('client_testimonial')->delete();
        
        \DB::table('client_testimonial')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Erick Jhonson',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/0d1a9651497a38d8b1c3871c84528bd4.PNG',
                'created_at' => '2020-03-26 19:10:01',
                'updated_at' => '2020-03-26 19:10:01',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Pierre Lipton',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/70c445ee64b1ed0583367a12a79a9ef2.PNG',
                'created_at' => '2020-03-26 19:10:22',
                'updated_at' => '2020-03-26 19:10:22',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Thomas Larson',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/73b817090081cef1bca77232f4532c5d.PNG',
                'created_at' => '2020-03-26 19:11:00',
                'updated_at' => '2020-03-26 19:11:00',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Fakhrurrazi Andi',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/0d1a9651497a38d8b1c3871c84528bd4.PNG',
                'created_at' => '2020-03-26 19:10:01',
                'updated_at' => '2020-03-26 19:10:01',
            ),
            4 => 
            array (
                'id' => 5,
                'name' => 'Muhammad Al-Hawariyun',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/70c445ee64b1ed0583367a12a79a9ef2.PNG',
                'created_at' => '2020-03-26 19:10:22',
                'updated_at' => '2020-03-26 19:10:22',
            ),
            5 => 
            array (
                'id' => 6,
                'name' => 'Rina Shintia Devi',
                'testimonial' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/73b817090081cef1bca77232f4532c5d.PNG',
                'created_at' => '2020-03-26 19:11:00',
                'updated_at' => '2020-03-26 19:11:00',
            ),
        ));
        
        
    }
}