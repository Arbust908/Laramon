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
        ]);
        Type::create([
        'name' => 'fight',
        ]);
        Type::create([
        'name' => 'flying',
        ]);
        Type::create([
        'name' => 'poison',
        ]);
        Type::create([
        'name' => 'ground',
        ]);
        Type::create([
        'name' => 'rock',
        ]);
        Type::create([
        'name' => 'bug',
        ]);
        Type::create([
        'name' => 'ghost',
        ]);
        Type::create([
        'name' => 'fire',
        ]);
        Type::create([
        'name' => 'water',
        ]);
        Type::create([
        'name' => 'grass',
        ]);
        Type::create([
        'name' => 'electric',
        ]);
        Type::create([
        'name' => 'psychic',
        ]);
        Type::create([
        'name' => 'ice',
        ]);
        Type::create([
        'name' => 'dragon',
        ]);

    }
}
