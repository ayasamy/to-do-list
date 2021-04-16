<?php

namespace Database\Seeders;
use App\Models\Step;
use App\Models\DoList;
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
       // Step::factory(5)->create();
        DoList::factory(1)->create();
    }
}
