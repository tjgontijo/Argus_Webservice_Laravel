<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Gender;

class GendersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gender::create([
            'name' => 'Feminino'           
        ]);
        Gender::create([
            'name' => 'Masculino'           
        ]);
    }
}
