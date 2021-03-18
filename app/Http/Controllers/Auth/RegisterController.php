<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\SystemVariable;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;
use App\Wallet;
use App\BillingAddress;
use App\ShippingAddress;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $system_var = SystemVariable::first();

        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'username'=> ['required','unique:users','alpha_num', 'max: 20', 'min: 5'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' => ['sometimes', 'string', 'max: 16', 'min: 5'],
            'password' => ['required', 'string', 'min: '.$system_var->password_length, 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        
        $wallet = new Wallet();
        $wallet->amount = 0;
        $wallet->save();

        $wallet_id = count(Wallet::all());

        if($wallet_id){
            $user = User::create([
                'name' => ucfirst($data['name']),
                'username' => strtolower($data['username']),
                'email' => $data['email'],
                'phone' => $data['phone'],
                'password' => Hash::make($data['password']),
                'wallet_id' => $wallet_id
            ]);

            $user = User::latest()->first();

            BillingAddress::create([
                'user_id' => $user->id
            ]);

            ShippingAddress::create([
                'user_id' => $user->id
            ]);

            /*if($user){
                Mail::to($data['email'])->send(new WelcomeMail());
            }*/

            return $user;
        }
        
    }

}
