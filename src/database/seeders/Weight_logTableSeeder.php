<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class Weight_logTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\WeightLog::factory(35)->create();
    }
}
