<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Seed Hotel table.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Feature::factory()
            ->times(10)
            ->create();
    }
}
