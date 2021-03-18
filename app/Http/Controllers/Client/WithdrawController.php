<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Withdraw;

class WithdrawController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	return view('client.fund.withdraw.index');
    }

    public function withdraw(){
    	$data = request()->validate([
    		'ac_holder_name' => 'required|string|min:5',
    		'ac_holder_number' => 'required|numeric',
    		'ac_holder_iban' => 'required|string',
    		'bank_name' => 'required|string',
    		'bank_address' => 'required|string',
    		'bank_id' => 'required|alpha_num',
    		'withdraw_amount' => 'required|numeric',
    		'comments' => 'required|string',
    		'balance_type' => 'required'
    	]);

    	$user_id = Auth::user()->id;
    	$wallet_amount = Auth::user()->wallet->amount;

    	if(request('withdraw_amount') > $wallet_amount ){
    		return redirect()->route('withdraw.index')->with('failed', 'Sorry, You have not enough wallet amount to withdraw. Check your wallet then withdraw. Thank You!');
    	}

    	$withdraw = new Withdraw();
    	$withdraw->user_id = $user_id;
    	$withdraw->ac_holder_name = request('ac_holder_name'); 
    	$withdraw->ac_holder_number = request('ac_holder_number'); 
    	$withdraw->ac_holder_iban = request('ac_holder_iban'); 
    	$withdraw->bank_name = request('bank_name'); 
    	$withdraw->bank_address = request('bank_address'); 
    	$withdraw->bank_id = request('bank_id'); 
    	$withdraw->withdraw_amount = request('withdraw_amount'); 
    	$withdraw->comments = request('comments'); 
    	$withdraw->balance_type = request('balance_type'); 
    	$withdraw->save();

    	return redirect()->route('withdraw.index')->with('success', 'Withdraw function is submitted successfully, please wait for approvement');
    }
}
