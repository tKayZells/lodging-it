<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class HotelSeeder extends Seeder
{
    /**
     * Seed Hotel table.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Hotel::factory()
            ->times(1)
            ->has( \App\Models\Room::factory(15), "rooms" )
            ->create();
    }
}
