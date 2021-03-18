<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellGoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sell_gold', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('gold_name');
            $table->string('gold_image')->nullable()->default('goldbar.png');
            $table->string('gold_description');
            $table->integer('gold_quantity');
            $table->float('gold_unit_price', 8, 2);
            $table->float('gold_sub_total_price', 8,2);
            $table->string('gold_sell_status')->nullable()->default('pending');
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
        Schema::dropIfExists('sell_gold');
    }
}
