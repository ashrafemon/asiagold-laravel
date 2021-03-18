<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\OrderCard;

class CardOrderManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_orders = OrderCard::where('card_order_status', 'approve')->paginate(5);
    	$pending_orders = OrderCard::where('card_order_status', 'pending')->paginate(5);
    	return view('admin.card_order_manager.index', compact('approve_orders','pending_orders'));
    }

    public function edit($id){
    	$order = OrderCard::where('id', $id)->first();
    	return view('admin.card_order_manager.edit', compact('order'));
    }

    public function update($id){
    	$order = OrderCard::where('id', $id)->first();
    	if($order->card_order_status == request('card_order_status')){
            return redirect()->route('order.card.manage.edit', $order->id)->with('same_message', 'Are you joking with me?');
        }

        $order->card_currency = request('card_currency');
        $order->card_order_status = request('card_order_status');
        $order->update();

        return redirect()->route('order.card.manage.index');
    }

    public function destroy($id){
    	$order = OrderCard::where('id', $id)->delete();

    	return redirect()->route('order.card.manage.index');
    }
}
