<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\BuyGold;
use App\GoldShipping;

class GoldShippingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user_id = Auth::user()->id;
        $my_golds = BuyGold::where('user_id', $user_id)
                            ->where('gold_buy_status', 'approve')
                            ->get();

        return view('client.gold.shipping.index', compact('my_golds'));
    }

    public function gold_shipping(Request $request){
        $user_id = Auth::user()->id;


        $shipping_gold_cart = new GoldShipping();
        $shipping_gold_carts = GoldShipping::where('user_id',$user_id)->get();

        for($i = 0; $i < count($shipping_gold_carts) ; $i++) { 
            $gold_name = request('gold_name');
            if($shipping_gold_carts[$i]->gold_name == $gold_name){

                $shipping_cart = GoldShipping::where('user_id', $user_id)
                                    ->where('gold_name', $gold_name)
                                    ->first();
                $shipping_cart->gold_quantity += request('gold_quantity');
                $shipping_cart->gold_sub_total_price += request('gold_sub_total_price');

                $shipping_cart->shipping_person_name = request('shipping_person_name');
                $shipping_cart->shipping_house = request('shipping_house');
                $shipping_cart->shipping_city = request('shipping_city');
                $shipping_cart->shipping_address = request('shipping_address');
                $shipping_cart->shipping_street = request('shipping_street');
                $shipping_cart->shipping_whatsapp_number = request('shipping_whatsapp_number');
                $shipping_cart->shipping_phone = request('shipping_phone');
                $shipping_cart->shipping_cost = request('shipping_cost');
                $shipping_cart->update();
                return response()->json(['Success' => 'Update Shipping Gold to Cart Successfully'], 200); 
            }
        }

        $shipping_gold_cart->user_id = $user_id;
        $shipping_gold_cart->gold_name = $request->gold_name;
        $shipping_gold_cart->gold_description = $request->gold_description;
        $shipping_gold_cart->gold_quantity = $request->gold_quantity;
        $shipping_gold_cart->gold_unit_price = $request->gold_unit_price;
        $shipping_gold_cart->gold_sub_total_price = $request->gold_sub_total_price;
        $shipping_gold_cart->shipping_person_name = request('shipping_person_name');
        $shipping_gold_cart->shipping_house = request('shipping_house');
        $shipping_gold_cart->shipping_city = request('shipping_city');
        $shipping_gold_cart->shipping_address = request('shipping_address');
        $shipping_gold_cart->shipping_street = request('shipping_street');
        $shipping_gold_cart->shipping_whatsapp_number = request('shipping_whatsapp_number');
        $shipping_gold_cart->shipping_phone = request('shipping_phone');
        $shipping_gold_cart->shipping_cost = request('shipping_cost');
        $shipping_gold_cart->save();

        return response()->json(['Success' => 'Add Gold to Shipping Cart Successfully'], 201);
    }
}
