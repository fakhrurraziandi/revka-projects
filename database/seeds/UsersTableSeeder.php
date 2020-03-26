<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Admin',
                'email' => 'admin@revka.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$eJ4ZR.PbFYXQ6WThaDe0ZuF3.mveLZygg1H3et41Xb8DugZulMwrC',
                'remember_token' => NULL,
                'created_at' => '2020-03-24 08:31:21',
                'updated_at' => '2020-03-24 08:31:21',
            ),
        ));
        
        
    }
}