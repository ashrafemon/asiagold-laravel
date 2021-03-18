<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoldLoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gold_loans', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->float('loan_amount', 8,2);
            $table->integer('loan_months');
            $table->float('monthly_repayment', 8, 2);
            $table->float('completion_fee', 8,2);
            $table->float('total_payable', 8, 2);
            $table->float('interest_rate', 8,2);
            $table->float('gold_price', 8, 2);
            $table->float('remains_loan', 8, 2);
            $table->string('gold_loan_status')->nullable()->default('pending');
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
        Schema::dropIfExists('gold_loans');
    }
}
