<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\CreditCard;
use App\OrderCard;
use App\BuyGold;

class CreditCardController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user_id = Auth::user()->id;
    	$cards = CreditCard::where('user_id', $user_id)
    						->where('card_status', 'active')
    						->get();
    	return view('client.credit.index', compact('cards'));
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


    	return view('client.credit.create', compact('max_loan_amount', 'min_loan_amount', 'my_gold_total_price'));
    }

    public function store(){
    	$user_id = Auth::user()->id;

    	$order = new OrderCard();

    	$my_golds = BuyGold::where('user_id', $user_id)
    						->where('gold_buy_status', 'approve')
    						->get();

    	$my_gold_total_price = 0;

    	for ($i=0; $i < count($my_golds) ; $i++) { 
    		$my_gold_total_price += $my_golds[$i]->gold_sub_total_price;
    	}

    	$order->user_id = $user_id;
    	$order->card_amount = request('card_amount');
    	$order->card_currency = request('card_currency');
    	$order->gold_price = $my_gold_total_price;
    	$order->save();

    	return redirect()->route('credit.index');
    }
}
