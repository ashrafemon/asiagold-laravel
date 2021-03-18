<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\BuyGold;
use App\Wallet;
use App\Gold;
use App\BillingAddress;
use App\ShippingAddress;

class CartController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        $user_id = Auth::user()->id;
        $gold_carts = BuyGold::where('user_id',$user_id)->where('gold_buy_status', 'pending')->get();

        $billingaddress = BillingAddress::where('user_id', $user_id)->first();
        $shippingaddress = ShippingAddress::where('user_id', $user_id)->first();

        $gold_cart_total = 0;
        for($i = 0; $i < count($gold_carts); $i++){
            $gold_cart_total += $gold_carts[$i]['gold_sub_total_price'];
        }

        return view('client.cart.index', compact('gold_carts', 'gold_cart_total', 'billingaddress', 'shippingaddress'));
    }

    public function checkout(){

        $user_id = Auth::user()->id;
        $wallet_id = Auth::user()->wallet_id;

        $gold_carts = BuyGold::where('user_id',$user_id)->where('gold_buy_status', 'pending')->get();

        $gold_total_price = 0; 

        for($i= 1; $i <= count($gold_carts); $i++){
            $gold_cart = BuyGold::where('user_id', $user_id)
                                ->where('gold_buy_status', 'pending')
                                ->first();

            $gold_name = $gold_cart->gold_name;

            $gold = Gold::where('gold_name', $gold_name)->first();

            if($gold_cart->gold_quantity > $gold->gold_amount){
                return redirect()->route('cart.index')->with('cart_message_failed','Sorry! We have not enought gold to buy...');
            }

            $gold_cart->gold_buy_status = 'approve';
            $gold_cart->update();

            $gold->gold_amount -= $gold_cart->gold_quantity;
            $gold->update();

            $gold_total_price += $gold_cart->gold_sub_total_price;
        }

        $wallet = Wallet::where('id', $wallet_id)->first();
        $wallet_amount = $wallet->amount;
        $new_wallet = $wallet_amount - $gold_total_price;

        $wallet->amount = $new_wallet;
        $wallet->update();

        return redirect()->route('gold.sell.index')->with('cart_message','Successfully add gold to your account');
    }

    public function destroy($id){

        $gold_cart = BuyGold::where('id', $id)->first();

        $gold_cart->delete();

        return redirect()->route('cart.index');
    }
}
