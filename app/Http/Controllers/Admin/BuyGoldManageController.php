<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BuyGold;
use App\Wallet;
use App\Gold;

class BuyGoldManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_buy_golds = BuyGold::where('gold_buy_status','approve')->paginate(5);
    	$pending_buy_golds = BuyGold::where('gold_buy_status','pending')->paginate(5);

    	return view('admin.buy_gold_manager.index', compact('approve_buy_golds', 'pending_buy_golds'));
    }

    public function edit($id){
    	$buy_gold = BuyGold::where('id', $id)->first();

    	return view('admin.buy_gold_manager.edit', compact('buy_gold'));
    }

    public function update(Request $request, $id){
    	$buy_gold = BuyGold::where('id', $id)->first();

        if($buy_gold->gold_buy_status == request('gold_buy_status')){
            return redirect()->route('buy.gold.manage.edit', $buy_gold->id)->with('same_message', 'Are you joking with me?');
        }

        $user_id = $buy_gold->user_id;
        $wallet_id = $buy_gold->user->wallet_id;

        $wallet = Wallet::where('id', $wallet_id)->first();
        $gold = Gold::where('gold_name',$gold_name)->first();

        $wallet_amount = $wallet->amount;
        $gold_cart_total = $buy_gold->gold_sub_total_price;

        if(request('gold_buy_status') == 'approve'){
            if($gold_cart_total > $wallet_amount){
                return redirect()->route('buy.gold.manage.edit', $buy_gold->id)->with('cart_message_failed','He has not enough wallet amount to buy those gold, Please first deposit for your wallet amount');
            }

            if($buy_gold->gold_quantity > $gold->gold_amount){
                return redirect()->route('buy.gold.manage.edit', $buy_gold->id)->with('cart_message_failed','Sorry! We have not enought gold to buy...');
            }

            $new_wallet = $wallet_amount - $gold_cart_total;
            $wallet->amount = $new_wallet;
            $wallet->update();

            $buy_gold->gold_buy_status = 'approve';
            $buy_gold->update();

            $gold->gold_amount -= $buy_gold->gold_quantity;
            $gold->update();
        }

        if(request('gold_buy_status') == 'pending'){
            $new_wallet = $wallet_amount + $gold_cart_total;
            $wallet->amount = $new_wallet;
            $wallet->update();

            $buy_gold->gold_buy_status = 'pending';
            $buy_gold->update();

            $gold->gold_amount += $buy_gold->gold_quantity;
            $gold->update();
        }

    	return redirect()->route('buy.gold.manage.index');
    }

    public function destroy($id){
    	$buy_gold = BuyGold::where('id', $id)->first();

        if($buy_gold->gold_buy_status == 'pending'){
            $buy_gold->delete();
        }

    	return redirect()->route('buy.gold.manage.index');
    }
}
