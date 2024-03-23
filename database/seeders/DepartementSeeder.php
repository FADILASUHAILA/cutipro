<?php

namespace Database\Seeders;

use App\Models\Departement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DepartementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Departement::create([
            'departement_name' => 'VP', 
        ]);
        Departement::create([
            'departement_name' => 'Technical',
        ]);
        Departement::create([
            'departement_name' => 'IT',
        ]);
    }
}
