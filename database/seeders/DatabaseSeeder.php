<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Departement;
use App\Models\Employe;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Créer 5 départements
        Departement::factory()->count(5)->create();
        // Créer 20 employés répartis dans les départements
        Employe::factory()->count(20)->create();
    }
}
