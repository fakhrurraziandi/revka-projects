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
            17 => 
            array (
                'id' => 19,
                'name' => 'contact_section__google_map_embedded_script',
                'val' => '<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.5254036543893!2d107.65880851532476!3d-6.947178369942726!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e8227918c261%3A0x3936e8e0a71663e3!2sJl.%20Jupiter%20Tengah%20III%2C%20Sekejati%2C%20Kec.%20Buahbatu%2C%20Kota%20Bandung%2C%20Jawa%20Barat%2040286!5e0!3m2!1sen!2sid!4v1584994705283!5m2!1sen!2sid" frameborder="0" style="border:0; height: 100%; width: 100%;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>',
                'type' => 'string',
                'created_at' => '2020-04-02 13:18:29',
                'updated_at' => '2020-04-02 13:18:29',
            ),
            18 => 
            array (
                'id' => 20,
                'name' => 'social_media__facebook_url',
                'val' => 'https://www.facebook.com/',
                'type' => 'text',
                'created_at' => '2020-04-02 13:18:29',
                'updated_at' => '2020-04-02 13:18:29',
            ),
            19 => 
            array (
                'id' => 21,
                'name' => 'social_media__twitter_url',
                'val' => 'https://twitter.com/',
                'type' => 'text',
                'created_at' => '2020-04-02 13:18:29',
                'updated_at' => '2020-04-02 13:18:29',
            ),
            20 => 
            array (
                'id' => 22,
                'name' => 'social_media__instagram_url',
                'val' => 'https://instagram.com/',
                'type' => 'text',
                'created_at' => '2020-04-02 13:18:29',
                'updated_at' => '2020-04-02 13:18:29',
            ),
            21 => 
            array (
                'id' => 23,
                'name' => 'social_media__youtube_url',
                'val' => 'https://youtube.com/',
                'type' => 'text',
                'created_at' => '2020-04-02 13:18:29',
                'updated_at' => '2020-04-02 13:18:29',
            ),
        ));
        
        
    }
}