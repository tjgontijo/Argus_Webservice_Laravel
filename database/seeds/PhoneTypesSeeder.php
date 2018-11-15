<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\PhoneType;

class PhoneTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PhoneType::create([
            'name' => 'Celular'           
        ]);
        PhoneType::create([
            'name' => 'Residencial'           
        ]);
        PhoneType::create([
            'name' => 'Celular comercial'           
        ]);
        PhoneType::create([
            'name' => 'Comercial'           
        ]);
        PhoneType::create([
            'name' => 'Fax residencial'           
        ]);
        PhoneType::create([
            'name' => 'Fax comercial'           
        ]);    
        PhoneType::create([
            'name' => 'Carro'           
        ]);
        PhoneType::create([
            'name' => 'Outros'           
        ]);
    }
}
