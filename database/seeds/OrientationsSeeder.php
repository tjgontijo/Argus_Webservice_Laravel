<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\Orientation;

class OrientationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Orientation::create([
            'name' => 'Heterossexual'           
        ]);
        Orientation::create([
            'name' => 'Homossexual'           
        ]);
        Orientation::create([
            'name' => 'Bissexual'           
        ]);
        Orientation::create([
            'name' => 'Assexuada'           
        ]);
    }
}
