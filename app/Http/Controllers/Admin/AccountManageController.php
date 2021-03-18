<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BuyGold;
use App\SellGold;
use App\Deposit;
use App\Withdraw;
use App\User;

class AccountManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$buy_golds = BuyGold::where('gold_buy_status', 'approve')->paginate(10);

    	$buy_gold_total = 0;
    	for ($i=0; $i < count($buy_golds) ; $i++) { 
    		$buy_gold_total += $buy_golds[$i]->gold_sub_total_price;
    	}

    	$sell_golds = SellGold::where('gold_sell_status', 'approve')->paginate(10);

    	$sell_gold_total = 0;
    	for ($i=0; $i < count($sell_golds) ; $i++) { 
    		$sell_gold_total += $sell_golds[$i]->gold_sub_total_price;
    	}

    	$deposits = Deposit::where('deposit_status', 'approve')->paginate(10);

    	$deposit_total = 0;
    	for ($i=0; $i < count($deposits) ; $i++) { 
    		$deposit_total += $deposits[$i]->deposit_amount;
    	}

    	$withdraws = Withdraw::where('withdraw_status', 'approve')->paginate(10);

    	$withdraw_total = 0;
    	for ($i=0; $i < count($withdraws) ; $i++) { 
    		$withdraw_total += $withdraws[$i]->withdraw_amount;
    	}

    	$users = User::where('role_id', 1)
	    				->where('status', 'active')
	    				->latest()
	    				->take(5)
	    				->get();

    	return view('admin.account_manager.index', compact('buy_golds', 'buy_gold_total', 'sell_golds', 'sell_gold_total', 'deposits', 'deposit_total', 'withdraws', 'withdraw_total', 'users' ));
    }
}
