<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Deposit;
use Auth;

class DepositController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('client.fund.deposit.index');
    }

    public function bank_wire_deposit(Request $request){
    	$user_id = Auth::user()->id;

    	$bank_wire = new Deposit();
    	
    	$bank_wire->user_id = $user_id;
    	$bank_wire->deposit_type = 'Bank Wire';
    	$bank_wire->deposit_amount = $request->bank_wire_amount;
    	$bank_wire->save();

    	return response()->json(['bank_wire' => 'Bank wire deposit is submitted successfully, please wait for approvement'], 201);
    }

    public function crypto_currency_deposit(Request $request){
        $user_id = Auth::user()->id;

        $crypto_currency = new Deposit();
        
        $crypto_currency->user_id = $user_id;
        $crypto_currency->deposit_type = 'Crypto Currency';
        $crypto_currency->deposit_amount = $request->crypto_currency_amount;
        $crypto_currency->save();

        return response()->json(['crypto_currency' => 'Crypto currency deposit is submitted successfully, please wait for approvement'], 201);
    }

    public function cash_deposit(Request $request){
        $user_id = Auth::user()->id;

        $cash = new Deposit();
        
        $cash->user_id = $user_id;
        $cash->deposit_type = 'Cash';
        $cash->deposit_amount = $request->cash_amount;
        $cash->save();

        return response()->json(['cash' => 'Cash deposit is submitted successfully, please wait for approvement'], 201);
    }
}
