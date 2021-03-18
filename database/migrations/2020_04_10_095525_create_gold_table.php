<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold', function (Blueprint $table) {
            $table->id();
            $table->string('gold_name');
            $table->float('gold_size', 8, 2);
            $table->string('gold_image')->nullable()->default('goldbar.png');
            $table->text('gold_description');
            $table->float('gold_unit_price', 8, 2);
            $table->integer('gold_amount');
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
        Schema::dropIfExists('gold');
    }
}
