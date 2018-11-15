<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\AddressType;

class AddressTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AddressType::create([
            'name' => 'Residencial'           
        ]);
        AddressType::create([
            'name' => 'Comercial'           
        ]);
        AddressType::create([
            'name' => 'Outros'           
        ]);
    }
}
