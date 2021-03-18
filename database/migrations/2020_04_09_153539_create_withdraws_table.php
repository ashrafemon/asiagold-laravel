<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWithdrawsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('withdraws', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('ac_holder_name');
            $table->string('ac_holder_number');
            $table->string('ac_holder_iban');
            $table->string('bank_name');
            $table->string('bank_address');
            $table->string('bank_id');
            $table->string('withdraw_amount');
            $table->string('comments');
            $table->string('balance_type');
            $table->string('withdraw_status')->nullable()->default('pending');
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
        Schema::dropIfExists('withdraws');
    }
}
