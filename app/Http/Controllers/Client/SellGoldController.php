<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\BuyGold;
use App\SellGold;
use Auth;

class SellGoldController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user_id = Auth::user()->id;
    	$my_golds = BuyGold::where('user_id', $user_id)->where('gold_buy_status','approve')->paginate(10);

        $gold_total_price = 0;

        for ($i=0; $i < count($my_golds) ; $i++) {
            $gold_total_price += $my_golds[$i]->gold_sub_total_price;
        }

    	return view('client.gold.sell.index', compact('my_golds', 'gold_total_price'));
    }

    public function sell_gold(Request $request){
        $user_id = Auth::user()->id;
    
        $sell_gold_cart = new SellGold();
        $sell_gold_carts = SellGold::where('user_id',$user_id)->get();
        
        for($i = 0; $i < count($sell_gold_carts) ; $i++) { 
            $gold_name = request('gold_name');
            if($sell_gold_carts[$i]->gold_name == $gold_name){
                $gold_cart = SellGold::where('user_id', $user_id)
                                    ->where('gold_name', $gold_name)
                                    ->first();
                $my_gold = BuyGold::where('user_id',$user_id)
                                    ->where('gold_name', $gold_name)
                                    ->first();
                                    
                $gold_cart->gold_quantity += request('gold_quantity');
                $gold_cart->gold_sub_total_price += request('gold_sub_total_price');
                $gold_cart->update();

                if($gold_cart->gold_quantity > $my_gold->gold_quantity){
                    $gold_cart->gold_quantity -= request('gold_quantity');
                    $gold_cart->gold_sub_total_price -= request('gold_sub_total_price');
                    $gold_cart->update();

                    return response()->json(['message' => 'Sell gold quantity not bigger than your collection gold thats why this sell item not accepted...'], 201);
                }

                
                return response()->json(['message' => 'Update Sell Gold to Cart Successfully'], 200); 
            }
        }

        $sell_gold_cart->user_id = $user_id;
        $sell_gold_cart->gold_name = $request->gold_name;
        $sell_gold_cart->gold_description = $request->gold_description;
        $sell_gold_cart->gold_quantity = $request->gold_quantity;
        $sell_gold_cart->gold_unit_price = $request->gold_unit_price;
        $sell_gold_cart->gold_sub_total_price = $request->gold_sub_total_price;
        $sell_gold_cart->save();

        return response()->json(['message' => 'Add Gold to Sell Cart Successfully'], 201);
    }
}
