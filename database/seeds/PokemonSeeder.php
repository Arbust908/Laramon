<?php

use Illuminate\Database\Seeder;
use App\Pokemon;

class PokemonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pokemon::create([
            'name' => 'Bulbasaur',
            'weight' => '6.9',
            'height' => '0.7',
            'type_id' => 11,
            'evolves' => 2,
        ]);
        Pokemon::create([
            'name' => 'Ivysaur',
            'weight' => '13',
            'height' => '1.0',
            'type_id' => 11,
            'evolves' => 3,
        ]);
        Pokemon::create([
            'name' => 'Venausaur',
            'weight' => '100',
            'height' => '2.0',
            'type_id' => 11,
            'evolves' => null,
        ]);
        Pokemon::create([
            'name' => 'Charmander',
            'weight' => '8.5',
            'height' => '0.6',
            'type_id' => 9,
            'evolves' => 5,
        ]);
        Pokemon::create([
            'name' => 'Charmeleon',
            'weight' => '19',
            'height' => '1.1',
            'type_id' => 9,
            'evolves' => 6,
        ]);
        Pokemon::create([
            'name' => 'Charizard',
            'weight' => '90.5',
            'height' => '1.7',
            'type_id' => 9,
            'evolves' => null,
        ]);
        Pokemon::create([
            'name' => 'Squirtle',
            'weight' => '9',
            'height' => '0.5',
            'type_id' => 10,
            'evolves' => 8,
        ]);
        Pokemon::create([
            'name' => 'Wartortle',
            'weight' => '22.5',
            'height' => '1',
            'type_id' => 10,
            'evolves' => 9,
        ]);
        Pokemon::create([
            'name' => 'Blastoise',
            'weight' => '85.5',
            'height' => '1.6',
            'type_id' => 10,
            'evolves' => null,
        ]);
    }
}
