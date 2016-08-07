<?php

namespace App\Http\Controllers;

use DB;
use App\MasterProduct;

class ProductController extends Controller {
    /* View Products */

    public function viewProducts() {
        /* Define Calculation Constants */
        /* Box Type */
        define("CC_BoxType_Universal", 1, true);
        define("CC_BoxType_FullOverlap", 2, true);

        /* Flute Type */
        define("CC_FluteType_A", 1.55, true);
        define("CC_FluteType_B", 1.4, true);
        define("CC_FluteType_C", 1.6, true);

        /* Corrugator */
        define("CC_MinDeckle", 0, true);
        define("CC_MaxDeckle", 1800, true);

        /* Allowances */
        define("CC_Min_RS_Trim", 10, true);
        define("CC_Max_RS_Trim", 50, true);
        define("CC_Min_CS_Trim", 10, true);
        define("CC_Max_CS_Trim", 50, true);
        define("CC_Min_RS_Allow_3_Ply", 6, true);
        define("CC_Max_RS_Allow_3_Ply", 8, true);
        define("CC_Min_RS_Allow_5_Ply", 12, true);
        define("CC_Max_RS_Allow_5_Ply", 14, true);
        define("CC_Min_RS_Allow_7_Ply", 0, true);
        define("CC_Max_RS_Allow_7_Ply", 0, true);
        define("CC_Min_CS_Allow_3_Ply", 6, true);
        define("CC_Max_CS_Allow_3_Ply", 8, true);
        define("CC_Min_CS_Allow_5_Ply", 12, true);
        define("CC_Max_CS_Allow_5_Ply", 14, true);
        define("CC_Min_CS_Allow_7_Ply", 0, true);
        define("CC_Max_CS_Allow_7_Ply", 0, true);
        define("CC_Min_Flap_Width", 45, true);
        define("CC_Max_Flap_Width", 60, true);

        /* Fetch basic details */
        $products = collect(DB::table('master_products')
                ->join('part_types', 'master_products.part_type_id', '=', 'part_types.id')
                ->join('box_types', 'master_products.box_type_id', '=', 'box_types.id')
                ->select('master_products.*', 'part_types.part_type', 'box_types.box_type')
                ->get());

        /* Calculate Specs and add them to the collection */
        foreach ($products as $product) {
            $products->put('roll_size', $this->calcRollSize($product->height, $product->breadth, $product->ply, $product->part_type_id, $product->box_type_id)); 
        }
        
        return view('/layouts/masters/products-master', ['products' => $products]);
    }

    /* Calculate Roll Size */
    private function calcRollSize($height, $breadth, $ply, $partTypeID, $boxTypeID) {

        /* Part Type related settings */
        switch ($partTypeID) {
            case 1: /* Master Carton */
                switch ($boxTypeID) {
                    case 1: /* Universal */
                        $breadth = CC_BoxType_Universal * $breadth;
                        break;
                    case 2: /* Full Overlap */
                        $breadth = CC_BoxType_FullOverlap * $breadth;
                        break;
                }
                break;

            case 2: /* Pad */
                break;

            case 3: /* Partition */
                break;

            default:
            /* Error */
        }

        /* Ply related settings */
        switch ($ply) {
            Case 3:
                $allowVal = CC_Min_RS_Allow_3_Ply;
                break;
            Case 5:
                $allowVal = CC_Min_RS_Allow_5_Ply;
                break;
            Case 7:
                $allowVal = CC_Min_RS_Allow_7_Ply;
                break;
        }

        /* Actual Calculation */
        $rollSize_Design = $height + $breadth + $allowVal + CC_Min_RS_Trim;
        /* Calculate No. of Boards per Roll Size */
        $boardsPerRS = floor(CC_MaxDeckle / $rollSize_Design); /* Get Floor Value using Round */

        /* boardsPerRS is always >= 1, but just in case */
        If ($boardsPerRS >= 1) {
            $rollSize_Prod = ($boardsPerRS * ($height + $breadth)) + ($boardsPerRS * $allowVal) + ($boardsPerRS * CC_Min_RS_Trim);
        } else {
            /* Exception "Sorry ! Required Roll Size: " & rollSize_Design & " is too large to produce for Deckle: " & EnumCCCorrugator.eMaxDeckle */
        }

        return round($rollSize_Prod, 2);
    }

    /* Calculate Cut Size */

    /* Calculate Ups */

    /* Calculate Weight of Liners */
}
