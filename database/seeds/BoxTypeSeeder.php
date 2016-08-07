<?php

use Illuminate\Database\Seeder;
/* Import Model */
use App\BoxType;

class BoxTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part_type = new BoxType();
        $part_type->box_type = 'Universal';
        $part_type->sort_order = 1;
        $part_type->save();
        
        $part_type->box_type = 'Full Overlap';
        $part_type->sort_order = 2;
        $part_type->save();
        
        $part_type->box_type = 'Punch';
        $part_type->sort_order = 3;
        $part_type->save();
        
        $part_type->box_type = 'Flat Bed Press';
        $part_type->sort_order = 3;
        $part_type->save();
    }
}
