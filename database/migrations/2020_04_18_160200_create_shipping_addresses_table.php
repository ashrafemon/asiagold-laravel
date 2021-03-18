<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShippingAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('shipping_person_name')->nullable();
            $table->string('shipping_house')->nullable();
            $table->string('shipping_city')->nullable();
            $table->string('shipping_address')->nullable();
            $table->string('shipping_street')->nullable();
            $table->string('shipping_whatsapp_number')->nullable();
            $table->string('shipping_phone')->nullable();
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
        Schema::dropIfExists('shipping_addresses');
    }
}
