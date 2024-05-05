<?php

namespace Database\Seeders;

use App\Models\Carro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Carro::factory()->count(20)->create();
    }
}
