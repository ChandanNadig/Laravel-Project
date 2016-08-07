<?php

use Illuminate\Database\Seeder;
/* Import Model */
use App\MasterProduct;

class MasterProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new MasterProduct();
        $product->product_code = 'FCB143322';
        $product->part_type_id = 1;
        $product->box_type_id = 1;
        $product->length = 1425.00;
        $product->breadth = 330.00;
        $product->height = 211.00;
        $product->ply = 3;
        $product->gsm_a_base = 160;
        $product->gsm_a_flute = 140;
        $product->gsm_b_base = 0;
        $product->gsm_b_flute = 0;
        $product->gsm_top = 240;
        $product->save();
    }
}
