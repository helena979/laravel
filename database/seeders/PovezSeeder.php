<?php

namespace Database\Seeders;

use App\Models\Povez;
use Illuminate\Database\Seeder;

class PovezSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Povez::factory()->count(10)->create();
    }
}
