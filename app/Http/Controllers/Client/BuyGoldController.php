<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gold;
use App\BuyGold;
use Auth;
use App\Wallet;

class BuyGoldController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
        $golds = Gold::all();
        
    	return view('client.gold.buy.index', compact('golds'));
    }

    public function add_gold_cart(Request $request){
        $user_id = Auth::user()->id;
        $add_gold_cart = new BuyGold();
        $gold_carts = BuyGold::where('user_id',$user_id)->get();
        
        for($i = 0; $i < count($gold_carts) ; $i++) { 
            $gold_name = request('gold_name');
            if($gold_carts[$i]->gold_name == $gold_name){
                $gold_cart = BuyGold::where('user_id', $user_id)
                                    ->where('gold_name', $gold_name)
                                    ->first();
                $gold_cart->gold_quantity += request('gold_quantity');
                $gold_cart->gold_sub_total_price += request('gold_sub_total_price');
                $gold_cart->update();
                return response()->json(['Success' => 'Update to Cart Successfully'], 200); 
            }
        }

        $add_gold_cart->user_id = $user_id;
        $add_gold_cart->gold_name = $request->gold_name;
        $add_gold_cart->gold_description = $request->gold_description;
        $add_gold_cart->gold_quantity = $request->gold_quantity;
        $add_gold_cart->gold_unit_price = $request->gold_unit_price;
        $add_gold_cart->gold_sub_total_price = $request->gold_sub_total_price;
        $add_gold_cart->save();


        return response()->json(['Success' => 'Add to Cart Successfully'], 201); 
    }

    public function show_gold_cart(){
        $user_id = Auth::user()->id;
        $gold_carts = BuyGold::where('user_id',$user_id)->where('gold_buy_status', 'pending')->get();

        return response()->json(['gold_carts' => $gold_carts]);
    }

    public function place_order(){
        $user_id = Auth::user()->id;
        $wallet_amount = Auth::user()->wallet->amount;
        $gold_carts = BuyGold::where('user_id',$user_id)->where('gold_buy_status', 'pending')->get();
        
        $gold_cart_total = 0;

        for($i = 0; $i < count($gold_carts); $i++){
            $gold_cart_total += $gold_carts[$i]['gold_sub_total_price'];
        }

        if($gold_cart_total > $wallet_amount){
            return redirect()->route('deposit.index')->with('cart_message_failed','You have not enough wallet amount to buy those gold, Please first deposit for your wallet amount');
        }

        return redirect()->route('cart.index');
    }

}
