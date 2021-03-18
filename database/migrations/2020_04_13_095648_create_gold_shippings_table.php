<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold_shippings', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('gold_name');
            $table->string('gold_image')->nullable()->default('goldbar.png');
            $table->string('gold_description');
            $table->integer('gold_quantity');
            $table->float('gold_unit_price', 8, 2);
            $table->float('gold_sub_total_price', 8,2);
            $table->string('shipping_person_name');
            $table->string('shipping_house');
            $table->string('shipping_city');
            $table->string('shipping_address');
            $table->string('shipping_street')->nullable();
            $table->string('shipping_whatsapp_number');
            $table->string('shipping_phone');
            $table->string('shipping_cost');
            $table->string('shipping_status')->nullable()->default('pending');
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
        Schema::dropIfExists('gold_shippings');
    }
}
