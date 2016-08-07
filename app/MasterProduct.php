<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterProduct extends Model
{
    public function partType(){
        $this->belongsTo('App\PartType');
    }
    
    public function boxType(){
        $this->belongsTo('App\BoxType');
    }
}
