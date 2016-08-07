<?php

use Illuminate\Database\Seeder;
/* Import Model */
use App\PartType;

class PartTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $part_type = new PartType();
        $part_type->part_type = 'Master Carton';
        $part_type->sort_order = 1;
        $part_type->save();
        
        $part_type->part_type = 'Pad';
        $part_type->sort_order = 2;
        $part_type->save();
        
        $part_type->part_type = 'Partition';
        $part_type->sort_order = 3;
        $part_type->save();
    }
}
