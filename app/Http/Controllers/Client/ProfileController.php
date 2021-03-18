<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User;
use Auth;

use App\ShippingAddress;
use App\BillingAddress;

use App\SystemVariable;

class ProfileController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$user_id = Auth::user()->id;

    	$billingaddress = BillingAddress::where('user_id', $user_id)->first();
    	$shippingaddress = ShippingAddress::where('user_id', $user_id)->first();

    	return view('client.profile.index', compact('billingaddress', 'shippingaddress'));
    }

    public function personalInfoUpdate(){
    	$data = request()->validate([
    		'name' => 'required|string|max:255',
    		'username' => 'required|alpha_num|max: 20',
    		'phone' => 'sometimes',
    		'country' => 'sometimes'
    	]);

    	$user_id = Auth::user()->id;

    	$user = User::where('id', $user_id)->first();

    	$user->name = request('name');
    	$user->username = request('username');
    	$user->phone = request('phone');
    	$user->country = request('country');

    	$user->update();

    	return redirect()->route('profile.index')->with('message', 'Profile Info Update Successfully');
    }

    public function billingAddressUpdate(){
    	$user_id = Auth::user()->id;
    	$billingaddress = BillingAddress::where('user_id', $user_id)->first();

    	$billingaddress->billing_person_name = request('billing_person_name');
    	$billingaddress->billing_house = request('billing_house');
    	$billingaddress->billing_city = request('billing_city');
    	$billingaddress->billing_address = request('billing_address');
    	$billingaddress->billing_street = request('billing_street');
    	$billingaddress->billing_phone = request('billing_phone');

    	$billingaddress->update();

    	return redirect()->route('profile.index')->with('message', 'Billing Address Info Update Successfully');
    }

    public function shippingAddressUpdate(){
    	$user_id = Auth::user()->id;
    	$shippingaddress = ShippingAddress::where('user_id', $user_id)->first();

    	$shippingaddress->shipping_person_name = request('shipping_person_name');
    	$shippingaddress->shipping_house = request('shipping_house');
    	$shippingaddress->shipping_city = request('shipping_city');
    	$shippingaddress->shipping_address = request('shipping_address');
    	$shippingaddress->shipping_street = request('shipping_street');
    	$shippingaddress->shipping_whatsapp_number = request('shipping_whatsapp_number');
    	$shippingaddress->shipping_phone = request('shipping_phone');

    	$shippingaddress->update();

    	return redirect()->route('profile.index')->with('message', 'Shipping Address Info Update Successfully');
    }

    public function changePasswordUpdate(){
    	$user_id = Auth::user()->id;

    	$user = User::where('id', $user_id)->first();
    	$system_var = SystemVariable::first();

    	$data = request()->validate([
			'new_password' => 'required|string|min: '.$system_var->password_length,
			'password_confirmation' => 'required_with:new_password|same:new_password',
			'current_password' => 'required'
		]);

    	if(Hash::check(request('current_password'), $user->password)){
    		$user->password = Hash::make(request('new_password'));
    		$user->update();
    		Auth::logout();

    		return redirect()->route('login');
    	}else{
    		return redirect()->route('profile.index')->with('error_message', 'Current Password Not Match!!');
    	}
    }

    public function changeEmailUpdate(){
    	$user_id = Auth::user()->id;

    	$user = User::where('id', $user_id)->first();

    	$data = request()->validate([
			'email' => 'required|string|email|unique:users',
			'confirm_email' => 'required_with:email|same:email',
			'current_email' => 'required'
		]);

		if(request('current_email') == $user->email){
			if(request('current_email') == request('email')){
				return redirect()->route('profile.index')->with('error_message', 'Current Email & New Email Are Same!!');
			}
			$user->email = request('email');
    		$user->update();
    		Auth::logout();

    		return redirect()->route('login');
		}else{
			return redirect()->route('profile.index')->with('error_message', 'Current Email Not Match!!');
		}
    }


    public function changeAvatarUpdate(){
        $user_id = Auth::user()->id;

        $user = User::where('id', $user_id)->first();

        $data = request()->validate([
            'avatar' => 'image|mimes:jpeg,jpg,png,gif|required|max:300'
        ]);

        if(request()->hasFile('avatar')){
            $avatar = request()->file('avatar');
            $filename = time(). '.'.$avatar->getClientOriginalExtension();
            $path = 'assets/images/uploads/profile/';
            $avatar->move($path,$filename);
            
            $user->avatar = 'assets/images/uploads/profile/'.$filename;

            $user->update();

            return redirect()->route('profile.index')->with('message', 'Image Update');
        }else{
            return redirect()->route('profile.index')->with('error_message', 'Sorry');
        }


    }
}
