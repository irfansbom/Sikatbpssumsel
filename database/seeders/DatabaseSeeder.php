<?php

namespace Database\Seeders;

use App\Models\Publikasi;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        \App\Models\Publikasi::factory(10)->create();
        // factory(App \Publikasi::class)->make(10);
    }
}
