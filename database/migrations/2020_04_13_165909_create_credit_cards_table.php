<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCreditCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('card_bank_name');
            $table->string('card_number');
            $table->string('card_cvv');
            $table->string('card_holder_name');
            $table->date('card_expire_date');
            $table->float('card_credit_amount', 8, 2);
            $table->string('card_currency');
            $table->string('card_username');
            $table->string('card_password');
            $table->string('card_link');
            $table->string('card_status')->nullable()->default('active');
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
        Schema::dropIfExists('credit_cards');
    }
}
