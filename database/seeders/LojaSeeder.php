<?php

namespace Database\Seeders;

use App\Models\Loja;
use Illuminate\Database\Seeder;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loja::factory()->count(3)->create();
    }
}
