<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Breed;

class BreedsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Breed::create([
            'name' => 'Amarela'           
        ]);
        Breed::create([
            'name' => 'Branca'           
        ]);
        Breed::create([
            'name' => 'Indígena'           
        ]);
        Breed::create([
            'name' => 'Parda'           
        ]);
        Breed::create([
            'name' => 'Preta'           
        ]);
    }
}
