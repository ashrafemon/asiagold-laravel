<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\GoldLoan;
use App\BuyGold;

class GoldLoanController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user_id = Auth::user()->id;
    	$gold_loans = GoldLoan::where('user_id', $user_id)
    							->where('gold_loan_status', 'approve')
    							->get();

    	return view('client.gold.loan.index', compact('gold_loans'));
    }

    public function create(){
    	$user_id = Auth::user()->id;
    	$my_golds = BuyGold::where('user_id', $user_id)
    						->where('gold_buy_status', 'approve')
    						->get();

    	$my_gold_total_price = 0;

    	for ($i=0; $i < count($my_golds) ; $i++) { 
    		$my_gold_total_price += $my_golds[$i]->gold_sub_total_price;
    	}

    	$max_loan_amount = ($my_gold_total_price * 80) / 100;
        $min_loan_amount = ($my_gold_total_price * 10) / 100;

    	return view('client.gold.loan.create', compact('max_loan_amount', 'min_loan_amount', 'my_gold_total_price'));
    }

    public function store(){
    	$user_id = Auth::user()->id;

    	$loan = new GoldLoan();

    	$interest_rate = 1.2;
    	$my_golds = BuyGold::where('user_id', $user_id)
    						->where('gold_buy_status', 'approve')
    						->get();

    	$my_gold_total_price = 0;

    	for ($i=0; $i < count($my_golds) ; $i++) { 
    		$my_gold_total_price += $my_golds[$i]->gold_sub_total_price;
    	}

    	$loan->user_id = $user_id;
    	$loan->loan_amount = request('loan_amount');
    	$loan->loan_months = request('loan_months');
    	$loan->monthly_repayment = request('monthly_repayment');
    	$loan->completion_fee = request('completion_fee');
    	$loan->total_payable = request('total_payable');
    	$loan->interest_rate = $interest_rate;
    	$loan->gold_price = $my_gold_total_price;
    	$loan->remains_loan = request('total_payable');
    	$loan->save();

    	return redirect()->route('gold.loan.index');
    }
}
