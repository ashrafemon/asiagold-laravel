<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Withdraw;
use App\Wallet;

class WithdrawManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_withdraws = Withdraw::where('withdraw_status', 'approve')->paginate(5);
    	$pending_withdraws = Withdraw::where('withdraw_status', 'pending')->paginate(5);
    	return view('admin.withdraw_manager.index', compact('approve_withdraws', 'pending_withdraws'));
    }

    public function show($id){
    	$withdraw = Withdraw::where('id', $id)->first();
    	return view('admin.withdraw_manager.show', compact('withdraw'));
    }

    public function edit($id){
    	$withdraw = Withdraw::where('id', $id)->first();
    	return view('admin.withdraw_manager.edit', compact('withdraw'));
    }

    public function update(Request $request,$id){
    	$data = request()->validate([
    		'ac_holder_name' => 'required|string|min:5',
    		'ac_holder_number' => 'required|numeric',
    		'ac_holder_iban' => 'required|string',
    		'bank_name' => 'required|string',
    		'bank_address' => 'required|string',
    		'bank_id' => 'required|alpha_num',
    		'withdraw_amount' => 'required|numeric',
    		'comments' => 'required|string',
    		'balance_type' => 'required',
    		'withdraw_status' => 'required'
    	]);

    	$withdraw = Withdraw::where('id', $id)->first();

    	$wallet_amount = $withdraw->user->wallet->amount;

    	if(request('withdraw_amount') > $wallet_amount ){
    		return back()->with('failed', 'Sorry, He has not enough wallet amount to withdraw. Check his wallet then withdraw. Thank You!');
    	}

    	$withdraw->update($data);

    	if($withdraw->withdraw_status == 'approve'){
    		$wallet_id = $withdraw->user->wallet_id;
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount -= $withdraw->withdraw_amount;
    		$wallet->save();
    	}

    	if($withdraw->withdraw_status == 'pending'){
    		$wallet_id = $withdraw->user->wallet_id;
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount += $withdraw->withdraw_amount;
    		$wallet->save();
    	}

    	return redirect()->route('withdraw.manage.index');
    }


    public function destroy($id){
    	$withdraw = Withdraw::where('id', $id)->first();

    	$amount = $withdraw->withdraw_amount;
    	$wallet_id = $withdraw->user->wallet_id;
    	$status = $withdraw->withdraw_status;

    	$withdraw->delete();

    	if($status == 'approve'){
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount += $amount;
    		$wallet->save();
    	}

    	return redirect()->route('withdraw.manage.index');
    }
}
