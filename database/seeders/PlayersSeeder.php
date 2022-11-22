<?php

namespace Database\Seeders;

use App\Models\Player;
use Illuminate\Database\Seeder;

class PlayersSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $persija = [
            [
                "name" => "Joko", 
                "height" => "170",
                "weight" => "70",
                "position" => [3,4],
                "number" => 10,
                "team_id" => 1
            ],
            [
                "name" => "Bambang", 
                "height" => "170",
                "weight" => "70",
                "position" => [2,3,4],
                "number" => 7,
                "team_id" => 1
            ],
            [
                "name" => "Soleh", 
                "height" => "170",
                "weight" => "70",
                "position" => [1,2],
                "number" => 1,
                "team_id" => 1
            ]
        ];

        $persib = [
            [
                "name" => "Andi", 
                "height" => "170",
                "weight" => "70",
                "position" => [3,4],
                "number" => 10,
                "team_id" => 2
            ],
            [
                "name" => "Firman", 
                "height" => "170",
                "weight" => "70",
                "position" => [2,3,4],
                "number" => 7,
                "team_id" => 2
            ],
            [
                "name" => "Asep", 
                "height" => "170",
                "weight" => "70",
                "position" => [1,2],
                "number" => 1,
                "team_id" => 2
            ]
        ];

        $arema = [
            [
                "name" => "Farhan", 
                "height" => "170",
                "weight" => "70",
                "position" => [3,4],
                "number" => 10,
                "team_id" => 3
            ],
            [
                "name" => "Sandi", 
                "height" => "170",
                "weight" => "70",
                "position" => [2,3,4],
                "number" => 7,
                "team_id" => 3
            ],
            [
                "name" => "Arif", 
                "height" => "170",
                "weight" => "70",
                "position" => [1,2],
                "number" => 1,
                "team_id" => 3
            ]
        ];

        $players = array_merge($persija, $persib, $arema);

        foreach ($players as $player) {

            $data = Player::create([
                "name"    => $player['name'], 
                "height"  => $player['height'],
                "weight"  => $player['weight'],
                "number"  => $player['number'],
                "team_id" => $player['team_id']
            ]);

            $data->positions()->sync($player['position']);
        }
    }
}
