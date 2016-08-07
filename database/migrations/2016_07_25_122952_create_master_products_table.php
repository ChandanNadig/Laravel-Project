<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMasterProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_code');
            $table->integer('part_type_id');
            $table->integer('box_type_id');
            $table->float('length');
            $table->float('breadth');
            $table->float('height');
            $table->float('ply');
            $table->float('gsm_a_base');
            $table->float('gsm_a_flute');
            $table->float('gsm_b_base');
            $table->float('gsm_b_flute');
            $table->float('gsm_top');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('master_products');
    }
}
