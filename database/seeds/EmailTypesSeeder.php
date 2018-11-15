<?php

use Illuminate\Database\Seeder;
use App\Models\Admin\EmailType;

class EmailTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EmailType::create([
            'name' => 'Pessoal'           
        ]);
        EmailType::create([
            'name' => 'Comercial'           
        ]);
        EmailType::create([
            'name' => 'Institucional'           
        ]);
        EmailType::create([
            'name' => 'Empresarial'           
        ]);
        EmailType::create([
            'name' => 'Outros'           
        ]);
    }
}
