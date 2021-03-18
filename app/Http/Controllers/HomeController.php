<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\BuyGold;
use App\SellGold;
use App\Deposit;
use App\Withdraw;
use App\GoldLoan;

use App\Notification;

class HomeController extends Controller
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

        $buy_gold_recents = BuyGold::where('user_id', $user_id)
                                    ->where('gold_buy_status', 'approve')
                                    ->latest()
                                    ->take(5)
                                    ->get();
        $sell_gold_recents = SellGold::where('user_id', $user_id)
                                    ->where('gold_sell_status', 'approve')
                                    ->latest()
                                    ->take(5)
                                    ->get();

        $deposit_recents = Deposit::where('user_id', $user_id)
                                    ->where('deposit_status', 'approve')
                                    ->latest()
                                    ->take(5)
                                    ->get(); 

        $withdraw_recents = Withdraw::where('user_id', $user_id)
                                    ->where('withdraw_status', 'approve')
                                    ->latest()
                                    ->take(5)
                                    ->get(); 

        $recents = array_merge([$buy_gold_recents, $sell_gold_recents, $deposit_recents, $withdraw_recents]);

        $recent_five = array_slice($recents, 0, 3, true);

        // dd($recent_five);

        $my_gold_total_price = 0;

        for ($i=0; $i < count($my_golds) ; $i++) { 
            $my_gold_total_price += $my_golds[$i]->gold_sub_total_price;
        }

        $my_gold_total_price_euro = $my_gold_total_price * 0.91;

        return view('client.dashboard', compact('my_gold_total_price','my_gold_total_price_euro', 'recent_five'));
    }

    public function total_golds(){
        $user_id = Auth::user()->id;

        $my_golds = BuyGold::where('user_id', $user_id)
                            ->where('gold_buy_status', 'approve')
                            ->get();

        return response()->json(['golds' => $my_golds], 201);
    }

    public function profit_losses(){
        $user_id = Auth::user()->id;

        $my_golds = BuyGold::where('user_id', $user_id)
                            ->where('gold_buy_status', 'approve')
                            ->get();

        $my_gold_total_price = 0;
        $my_gold_total_quantity = 0;

        for ($i=0; $i < count($my_golds) ; $i++) { 
            $my_gold_total_price += $my_golds[$i]->gold_sub_total_price;
            $my_gold_total_quantity += $my_golds[$i]->gold_quantity;
        }

        $avarage_price = $my_gold_total_price / $my_gold_total_quantity;

        return response()->json(['avarage' => $avarage_price], 201);
    }

    public function loan(){
        $user_id = Auth::user()->id;

        $loan = GoldLoan::where('user_id', $user_id)
                        ->where('gold_loan_status', 'approve')
                        ->first();

        return response()->json(['loan' => $loan], 201);
    }

    public function invoice(){
        return view('client.invoice');
    }

    public function getNotifications(){
        $user_id = Auth::user()->id;
        $notifications = Notification::where('user_id',$user_id)->get();


        return response()->json(['notifications'=> $notifications], 201);
    }

    public function showNotification($id){
        $user_id = Auth::user()->id;

        $notification = Notification::where('user_id', $user_id)
                                    ->where('id', $id)
                                    ->first();

        $notification->visibility = 1;
        $notification->update();

        // return response()->json(['notification' => $notification], 201);
        return view('client.notification.show', compact('notification'));
    }

}
