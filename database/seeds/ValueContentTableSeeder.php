<?php

use Illuminate\Database\Seeder;

class ValueContentTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('value_content')->delete();
        
        \DB::table('value_content')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title' => 'Best Work',
                'description' => 'Memberdayakan seluruh potensi yang dimiliki untuk menghasilkan karya terbaik.',
                'image_file' => 'uploads/6f67057b6a3671fe882f6d4f27d547be.png',
                'created_at' => '2020-03-26 18:57:05',
                'updated_at' => '2020-03-26 18:57:05',
            ),
            1 => 
            array (
                'id' => 2,
                'title' => 'Reliable',
                'description' => 'Bertanggung jawab terhadap komitmen dan pekerjaan yang dimiliki.',
                'image_file' => 'uploads/8ede06ecd4c633266fdced4089d42ddd.png',
                'created_at' => '2020-03-26 18:57:30',
                'updated_at' => '2020-03-26 18:57:30',
            ),
            2 => 
            array (
                'id' => 3,
                'title' => 'Agile',
                'description' => 'Cepat tanggap dalam menghadapi segala tantangan yang akan dihadapi.',
                'image_file' => 'uploads/7ce3284b743aefde80ffd9aec500e085.png',
                'created_at' => '2020-03-26 18:57:53',
                'updated_at' => '2020-03-26 18:57:53',
            ),
            3 => 
            array (
                'id' => 4,
                'title' => 'Virtuos',
                'description' => 'Bekerja dengan hari, melayani dengan murni',
                'image_file' => 'uploads/64c31821603ab476a318839606743bd6.png',
                'created_at' => '2020-03-26 18:58:14',
                'updated_at' => '2020-03-26 18:58:14',
            ),
            4 => 
            array (
                'id' => 5,
                'title' => 'Empathy',
                'description' => 'Kokoh, saling menghargai, bersinergi menjadi satu.',
                'image_file' => 'uploads/6b5617315c9ac918215fc7514bef514b.png',
                'created_at' => '2020-03-26 18:58:33',
                'updated_at' => '2020-03-26 18:58:33',
            ),
        ));
        
        
    }
}