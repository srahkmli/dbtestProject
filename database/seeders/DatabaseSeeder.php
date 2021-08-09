<?php

namespace Database\Seeders;

use App\Models\test;
use App\Models\test2;
use App\Models\test3;
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
        test::factory(10000)->create();
        test2::factory(10000)->create();
        test3::factory(10000)->create();
    }
}
