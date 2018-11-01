<?php

use Illuminate\Database\Seeder;
use App\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Type::create([
        'name' => 'normal',
        'color' => '#aa9',
        ]);
        Type::create([
        'name' => 'fight',
        'color' => '#a84d3d',
        ]);
        Type::create([
        'name' => 'flying',
        'color' => '#89f',
        ]);
        Type::create([
        'name' => 'poison',
        'color' => '#a59',
        ]);
        Type::create([
        'name' => 'ground',
        'color' => '#db5',
        ]);
        Type::create([
        'name' => 'rock',
        'color' => '#ba6',
        ]);
        Type::create([
        'name' => 'bug',
        'color' => '#ab2',
        ]);
        Type::create([
        'name' => 'ghost',
        'color' => '#66b',
        ]);
        Type::create([
        'name' => 'fire',
        'color' => '#f42',
        ]);
        Type::create([
        'name' => 'water',
        'color' => '#39f',
        ]);
        Type::create([
        'name' => 'grass',
        'color' => '#7c5',
        ]);
        Type::create([
        'name' => 'electric',
        'color' => '#fc3',
        ]);
        Type::create([
        'name' => 'psychic',
        'color' => '#f59',
        ]);
        Type::create([
        'name' => 'ice',
        'color' => '#6cf',
        ]);
        Type::create([
        'name' => 'dragon',
        'color' => '#76e',
        ]);

    }
}
