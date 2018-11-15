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
        $this->call(AddressTypesSeeder::class);
        $this->call(BreedsSeeder::class);
        $this->call(EmailTypesSeeder::class);
        $this->call(GendersSeeder::class);
        $this->call(OrientationsSeeder::class);
        $this->call(PhoneTypesSeeder::class);
    }
}
