<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\GoldShipping;
use App\Wallet;
use App\BuyGold;

class GoldShippingManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_gold_shippings = GoldShipping::where('shipping_status', 'approve')->paginate(5);
    	$pending_gold_shippings = GoldShipping::where('shipping_status', 'pending')->paginate(5);

    	return view('admin.gold_shipping_manager.index', compact('approve_gold_shippings', 'pending_gold_shippings'));
    }

    public function show($id){
    	$gold_shipping = GoldShipping::where('id', $id)->first();

    	return view('admin.gold_shipping_manager.show', compact('gold_shipping'));
    }

    public function edit($id){
    	$gold_shipping = GoldShipping::where('id', $id)->first();

    	return view('admin.gold_shipping_manager.edit', compact('gold_shipping'));
    }

    public function update(Request $request, $id){
    	$gold_shipping = GoldShipping::where('id', $id)->first();

    	if($gold_shipping->shipping_status == request('shipping_status')){
            return redirect()->route('ship.gold.manage.edit', $gold_shipping->id)->with('same_message', 'Are you joking with me?');
        }

        $user_id = $gold_shipping->user_id;

        $wallet_id = $gold_shipping->user->wallet_id;

        $wallet = Wallet::where('id', $wallet_id)->first();
        $wallet_amount = $wallet->amount;
        $shipping_cost = $gold_shipping->shipping_cost;

        if(request('shipping_status') == 'approve'){

            if($shipping_cost > $wallet_amount){
                return redirect()->route('ship.gold.manage.edit', $gold_shipping->id)->with('cart_message_failed','He has not enough wallet amount to ship these gold, Please first deposit for your wallet amount');
            }

            $gold_name = $gold_shipping->gold_name;

            $my_gold = BuyGold::where('user_id', $user_id)
                                ->where('gold_buy_status', 'approve')
                                ->where('gold_name', $gold_name)
                                ->first();


            $my_gold->gold_quantity -= $gold_shipping->gold_quantity;
            $my_gold->gold_sub_total_price -= $gold_shipping->gold_sub_total_price;
            $my_gold->update();

            $new_wallet = $wallet_amount - $shipping_cost;
            $wallet->amount = $new_wallet;
            $wallet->update();

            $gold_shipping->shipping_status = 'approve';
            $gold_shipping->update();
        }

        return redirect()->route('ship.gold.manage.index'); 
    }

    public function destroy($id){
        $gold_shipping = GoldShipping::where('id', $id)
                                        ->where('shipping_status', 'pending')
                                        ->delete();

        return redirect()->route('ship.gold.manage.index'); 
    }
}
