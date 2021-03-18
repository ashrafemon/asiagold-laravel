<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->float('card_amount', 8, 2);
            $table->string('card_currency');
            $table->float('gold_price', 8,2);
            $table->string('card_order_status')->nullable()->default('pending');
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
        Schema::dropIfExists('order_cards');
    }
}
