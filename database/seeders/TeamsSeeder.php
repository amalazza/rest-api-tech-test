<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Team::insert([
            [
                "name" => "Persija", 
                "logo" => "persija.jpg",
                "since" => "1999-01-01",
                "address" => "team address",
                "city_id" => 1,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Persib", 
                "logo" => "persib.jpg",
                "since" => "1999-01-01",
                "address" => "team address",
                "city_id" => 2,
                "created_at" => now(), "updated_at" => now()
            ],
            [
                "name" => "Arema", 
                "logo" => "arema.jpg",
                "since" => "1999-01-01",
                "address" => "team address",
                "city_id" => 3,
                "created_at" => now(), "updated_at" => now()
            ]
        ]);
    }
}
