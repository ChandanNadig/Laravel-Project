<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BoxType extends Model
{
    public function products(){
        $this->hasMany('App\MasterProducts');
    }
}
