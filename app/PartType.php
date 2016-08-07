<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PartType extends Model
{
    public function products(){
        $this->hasMany('App\MasterProducts');
    }
}
