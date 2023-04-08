<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\WisataPackage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()


    {

        WisataPackage::factory(20)->create();
        Gallery::factory(10)->create();
    }
}
