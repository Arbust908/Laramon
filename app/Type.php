<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pokemon;

class Type extends Model
{
    public function pokemon(){
        return $this->hasMany(Pokemon::class);
    }
}
