<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SettingsTableSeeder::class);
        $this->call(HeaderCarouselTableSeeder::class);
        $this->call(PortofolioTableSeeder::class);
        $this->call(ServiceCarouselTableSeeder::class);
        $this->call(ValueContentTableSeeder::class);
        $this->call(ClientTestimonialTableSeeder::class);
    }
}
