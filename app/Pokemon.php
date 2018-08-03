<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Pokemon extends Model
{
    public function type(){
        return $this->hasOne('Type');
    }
}
