<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Type;

class Pokemon extends Model
{
    public function tipo(){
        return $this->belongsTo(Type::class);
    }
}
