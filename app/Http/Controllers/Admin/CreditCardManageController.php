<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;
use App\CreditCard;

class CreditCardManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$active_credit_cards = CreditCard::where('card_status', 'active')->paginate(5);
    	$inactive_credit_cards = CreditCard::where('card_status', 'inactive')->paginate(5);

    	return view('admin.credit_card_manager.index', compact('active_credit_cards','inactive_credit_cards'));
    }

    public function create(){
    	$users = User::where('status', 'active')
    					->where('role_id', 1)
    					->get();
    	return view('admin.credit_card_manager.create', compact('users'));
    }

    public function store(){
    	$data = request()->validate([
    		'user_id' => 'required',
    		'card_bank_name' => 'required',
    		'card_number' => 'required',
    		'card_cvv' => 'required',
    		'card_holder_name' => 'required',
    		'card_expire_date' => 'required',
    		'card_credit_amount' => 'required',
    		'card_currency' => 'required',
    		'card_username' => 'required',
    		'card_password' => 'required',
    		'card_link' => 'required',
    		'card_status' => 'required'
    	]);

    	CreditCard::create($data);

    	return redirect()->route('credit.card.manage.index');
    }
}
