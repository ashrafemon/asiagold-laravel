<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Deposit;
use App\Wallet;

class DepositManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_deposits = Deposit::where('deposit_status', 'approve')->paginate(5);
    	$pending_deposits = Deposit::where('deposit_status', 'pending')->paginate(5);
    	return view('admin.deposit_manager.index', compact('approve_deposits', 'pending_deposits'));
    }

    public function edit($id){

    	$deposit = Deposit::where('id', $id)->first();

    	return view('admin.deposit_manager.edit', compact('deposit'));
    }

    public function update(Request $request, $id){

    	$data = request()->validate([
    		'deposit_amount' => 'required',
    		'deposit_status' => 'required'
    	]);

    	$deposit = Deposit::where('id', $id)->first();

    	$deposit->update($data);

    	if($deposit->deposit_status == 'approve'){
    		$wallet_id = $deposit->user->wallet_id;
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount += $deposit->deposit_amount;
    		$wallet->save();
    	}

    	if($deposit->deposit_status == 'pending'){
    		$wallet_id = $deposit->user->wallet_id;
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount -= $deposit->deposit_amount;
    		$wallet->save();
    	}

    	return redirect()->route('deposit.manage.index');
    }

    public function destroy($id){
    	$deposit = Deposit::where('id', $id)->first();

    	$amount = $deposit->deposit_amount;
    	$wallet_id = $deposit->user->wallet_id;
    	$status = $deposit->deposit_status;

    	$deposit->delete();

    	if($status == 'approve'){
    		$wallet = Wallet::where('id', $wallet_id)->first();
    		$wallet->amount -= $amount;
    		$wallet->save();
    	}

    	return redirect()->route('deposit.manage.index');
    }
}
