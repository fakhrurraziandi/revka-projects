<?php

use Illuminate\Database\Seeder;

class PortofolioTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('portofolio')->delete();
        
        \DB::table('portofolio')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Portofolio 1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/5747a0021eb349e9c8d3667cf1a5e9ec.jpg',
                'created_at' => '2020-03-26 20:34:20',
                'updated_at' => '2020-03-26 20:34:20',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Portofolio 2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/88b057334964aecf7cc034c38011add0.jpg',
                'created_at' => '2020-03-26 20:34:35',
                'updated_at' => '2020-03-26 20:36:37',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Portofolio 3',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'image_file' => 'uploads/dda99de58ff020cfb57fec1404c97003.jpg',
                'created_at' => '2020-03-26 20:34:48',
                'updated_at' => '2020-03-26 20:34:48',
            ),
        ));
        
        
    }
}