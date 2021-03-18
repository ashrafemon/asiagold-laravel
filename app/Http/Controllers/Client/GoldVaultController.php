<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\BuyGold;

class GoldVaultController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user_id = Auth::user()->id;
        $my_golds = BuyGold::where('user_id', $user_id)
                            ->where('gold_buy_status', 'approve')
                            ->get();
        return view('client.gold.vault.index', compact('my_golds'));
    }
}
