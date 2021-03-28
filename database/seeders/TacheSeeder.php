<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Tache;

class TacheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tache::factory()
                ->count(50)
                ->create();
    }
}
