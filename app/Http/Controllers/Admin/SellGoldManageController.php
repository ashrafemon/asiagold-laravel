<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SellGold;
use App\BuyGold;
use App\Wallet;

class SellGoldManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_sell_golds = SellGold::where('gold_sell_status','approve')->paginate(5);
    	$pending_sell_golds = SellGold::where('gold_sell_status','pending')->paginate(5);
    	return view('admin.sell_gold_manager.index', compact('approve_sell_golds', 'pending_sell_golds'));
    }

    public function edit($id){
		$sell_gold = SellGold::where('id', $id)->first();
    	return view('admin.sell_gold_manager.edit', compact('sell_gold'));
    }

    public function update(Request $request, $id){
    	$sell_gold = SellGold::where('id', $id)->first();

    	if($sell_gold->gold_sell_status == request('gold_sell_status')){
            return redirect()->route('sell.gold.manage.edit', $sell_gold->id)->with('same_message', 'Are you joking with me?');
        }

        $gold_name = $sell_gold->gold_name;
        $gold = Gold::where('gold_name', $gold_name)->first();

        $user_id = $sell_gold->user_id;
        $wallet_id = $sell_gold->user->wallet_id;

        $wallet = Wallet::where('id', $wallet_id)->first();

        $wallet_amount = $wallet->amount;
        $gold_cart_total = $sell_gold->gold_sub_total_price;

        $sell_gold_name = $sell_gold->gold_name;
        $sell_gold_quantity = $sell_gold->gold_quantity;
        $sell_gold_sub_total = $sell_gold->gold_sub_total_price;

        $buy_gold = BuyGold::where('user_id', $user_id)
        				    ->where('gold_name', $sell_gold_name)->first();

    	$buy_gold_quantity = $buy_gold->gold_quantity;
    	$buy_gold_sub_total = $buy_gold->gold_sub_total_price;

        if(request('gold_sell_status') == 'approve'){
        	
        	$new_gold_quantity = $buy_gold_quantity - $sell_gold_quantity;
        	$new_sub_total = $buy_gold_sub_total - $sell_gold_sub_total;

        	$buy_gold->gold_quantity = $new_gold_quantity;
        	$buy_gold->gold_sub_total_price = $new_sub_total;

        	$buy_gold->update();

        	$new_wallet = $wallet_amount + $gold_cart_total;
            $wallet->amount = $new_wallet;
            $wallet->update();

            $sell_gold->gold_sell_status = 'approve';
            $sell_gold->update();

            $gold->gold_amount += $new_gold_quantity;
            $gold->update();

            if($buy_gold->gold_quantity == 0){
                $buy_gold->delete();
            }


        }

        if(request('gold_sell_status') == 'pending'){

            $new_gold_quantity = $buy_gold_quantity + $sell_gold_quantity;
        	$new_sub_total = $buy_gold_sub_total + $sell_gold_sub_total;

        	$buy_gold->gold_quantity = $new_gold_quantity;
        	$buy_gold->gold_sub_total_price = $new_sub_total;

        	$buy_gold->update();

        	$new_wallet = $wallet_amount - $gold_cart_total;
            $wallet->amount = $new_wallet;
            $wallet->update();

            $sell_gold->gold_sell_status = 'pending';
            $sell_gold->update();

            $gold->gold_amount -= $new_gold_quantity;
            $gold->update();
        }

    	return redirect()->route('sell.gold.manage.index');
    }

    public function destroy($id){
    	$sell_gold = SellGold::where('id', $id)->delete();
    	return redirect()->route('sell.gold.manage.index');
    }
}
