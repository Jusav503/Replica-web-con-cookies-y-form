<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\event;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        event::factory(8)->create();
    }
}
