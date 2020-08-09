<?php

use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(\Faker\Generator $faker)
    {   $var = 1;
        for($i=0;$i<=9;$i++){
           $country = ['Afghanistan','Australia','Bangladesh','India','Nepal','New Zealand','Pakistan','South Africa','Sri Lanka','Zimbabwe'];
           $countrycode = ['AF','AU','BD','IN','NP','NZ','PK','ZA','LK','ZW'];
           $team =  new \App\Team();
           $team->name = $country[$i].' ('.$countrycode[$i].')';
           $team->logo = 'https://www.countryflags.io/'.$countrycode[$i].'/flat/64.png';
           $team->club = $country[$i];
           $team->save();
           for ($j=0;$j<=14;$j++){
           $player_type = ['Batsman','Bowler','Wicket Keeper','All Rounder'];
           $key = array_rand($player_type);
           $user =  new \App\User();
           $user->firstname = $faker->firstName;
           $user->lastname = $faker->lastName;
           $user->image = 'https://joeschmoe.io/api/v1/'.$var;
           $user->jersey_number = $var;
           $user->country = $faker->country;
           $user->history = [
               'matches'=>$faker->randomNumber(2),
               'run'=>$faker->randomNumber(4),
               'highest'=>rand(20,200),
               'fifties'=>$faker->randomNumber(1),
               'hundreds'=>$faker->randomNumber(1),
               'ducks'=>$faker->randomNumber(1),
               'player_type'=>$player_type[$key],
           ];
           $team->users()->save($user);
           $var++;
           }
        }

    }
}
