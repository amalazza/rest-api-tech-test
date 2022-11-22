<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            ["name" => "Jakarta", "created_at" => now(), "updated_at" => now()],
            ["name" => "Bandung", "created_at" => now(), "updated_at" => now()],
            ["name" => "Malang", "created_at" => now(), "updated_at" => now()]

        ]);
    }
}
