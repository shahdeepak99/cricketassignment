<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class MatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {

        for($i=0;$i<=50;$i++) {
            $team1 = rand(1,5);
            $team2 = rand(6,10);
            $matchon  = $faker->dateTimeBetween('-1 month', '+1 month');
            $winner = null;
            if($matchon <= Carbon::now()){
                if($i%2 ==0)
                    $winner = $team1;
                else
                    $winner = $team2;
            }
            $match = new \App\Match();
            $match->team1 = $team1;
            $match->team2 = $team2;
            $match->winner_id = $winner;
            $match->match_on = $matchon;
            $match->save();
        }
    }
}
