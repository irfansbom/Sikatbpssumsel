<?php

namespace Database\Seeders;

use Carbon\Factory;
use Illuminate\Database\Seeder;

class publikasi_seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // factory(App\Publikasi::class)->make(10);
        \App\Models\Publikasi::factory(10)->make(10);
    }
}
