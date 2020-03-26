<?php

use Illuminate\Database\Seeder;

class SettingsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('settings')->delete();
        
        \DB::table('settings')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'app_name',
                'val' => 'Revka',
                'type' => 'string',
                'created_at' => '2020-03-24 09:37:20',
                'updated_at' => '2020-03-24 09:52:43',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'service_section__title',
                'val' => 'Our Services',
                'type' => 'string',
                'created_at' => '2020-03-24 09:37:20',
                'updated_at' => '2020-03-24 09:41:03',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'service_section__subtitle',
                'val' => 'We must understand what your needs are in order to offer',
                'type' => 'text',
                'created_at' => '2020-03-24 09:37:20',
                'updated_at' => '2020-03-24 09:49:54',
            ),
            3 => 
            array (
                'id' => 5,
                'name' => 'about_section__title',
                'val' => 'About Us',
                'type' => 'string',
                'created_at' => '2020-03-24 09:40:52',
                'updated_at' => '2020-03-24 09:40:52',
            ),
            4 => 
            array (
                'id' => 6,
                'name' => 'about_section__subtitle',
                'val' => 'We must understand what your needs are in order to offer.',
                'type' => 'text',
                'created_at' => '2020-03-24 09:40:52',
                'updated_at' => '2020-03-24 09:40:52',
            ),
            5 => 
            array (
                'id' => 7,
                'name' => 'about_section__detail',
                'val' => 'Revka Merupakan salah perusahaan IT Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium molestias aliquid repellendus illum, adipisci dicta sunt ratione numquam?',
                'type' => 'text',
                'created_at' => '2020-03-24 09:40:52',
                'updated_at' => '2020-03-24 09:40:52',
            ),
            6 => 
            array (
                'id' => 8,
                'name' => 'value_section__title',
                'val' => 'Our Value',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            7 => 
            array (
                'id' => 9,
                'name' => 'value_section__subtitle',
                'val' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'type' => 'text',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            8 => 
            array (
                'id' => 10,
                'name' => 'testimonial_section__title',
                'val' => 'Clients Testimonials',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            9 => 
            array (
                'id' => 11,
                'name' => 'testimonial_section__subtitle',
                'val' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'type' => 'text',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            10 => 
            array (
                'id' => 12,
                'name' => 'portofolio_section__title',
                'val' => 'Our Portofolios',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            11 => 
            array (
                'id' => 13,
                'name' => 'portofolio_section__subtitle',
                'val' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'type' => 'text',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            12 => 
            array (
                'id' => 14,
                'name' => 'contact_section__title',
                'val' => 'Our Contacts',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            13 => 
            array (
                'id' => 15,
                'name' => 'contact_section__subtitle',
                'val' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam, doloribus! Dolor provident voluptate qui iste sapiente! Consequuntur, corrupti?',
                'type' => 'text',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            14 => 
            array (
                'id' => 16,
                'name' => 'contact_section__address',
                'val' => 'Jl. Jupiter Tengah 1 Bandung, Indonesia',
                'type' => 'text',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            15 => 
            array (
                'id' => 17,
                'name' => 'contact_section__email',
                'val' => 'Customer@revka.id',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
            16 => 
            array (
                'id' => 18,
                'name' => 'contact_section__phone_number',
                'val' => '0813 2002 3346',
                'type' => 'string',
                'created_at' => '2020-03-25 10:28:55',
                'updated_at' => '2020-03-25 10:28:55',
            ),
        ));
        
        
    }
}