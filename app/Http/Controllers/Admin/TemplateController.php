<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\EmailTemplate;

class TemplateController extends Controller
{
    public function __construct(){

    	$this->middleware('auth');

    }

    public function index(){
    	$welcome_template = EmailTemplate::where('id', 1)->first();
    	$deposit_template = EmailTemplate::where('id', 2)->first();
    	$withdraw_template = EmailTemplate::where('id', 3)->first();
        $buy_template = EmailTemplate::where('id', 4)->first();
        $sell_template = EmailTemplate::where('id', 5)->first();
    	return view('admin.email_template.index', compact('welcome_template','deposit_template', 'withdraw_template', 'buy_template', 'sell_template'));
    }

    public function welcome_template_update(){
    	$data = request()->validate([
    		'welcome_title' => 'required|string|min: 5',
    		'welcome_subject' => 'required|string|min: 5',
    		'welcome_message'=> 'required'
    	]);

    	$welcome_template = EmailTemplate::where('id', 1)->first();

    	$welcome_template->title = request('welcome_title');
    	$welcome_template->subject = request('welcome_subject');
    	$welcome_template->message = request('welcome_message');

    	$welcome_template->update();

    	return redirect()->route('template.index');
    }

    public function deposit_template_update(){
        $data = request()->validate([
            'deposit_title' => 'required|string|min: 5',
            'deposit_subject' => 'required|string|min: 5',
            'deposit_message'=> 'required'
        ]);

        $deposit_template = EmailTemplate::where('id', 2)->first();

        $deposit_template->title = request('deposit_title');
        $deposit_template->subject = request('deposit_subject');
        $deposit_template->message = request('deposit_message');

        $deposit_template->update();

        return redirect()->route('template.index');
    }

    public function withdraw_template_update(){
        $data = request()->validate([
            'withdraw_title' => 'required|string|min: 5',
            'withdraw_subject' => 'required|string|min: 5',
            'withdraw_message'=> 'required'
        ]);

        $withdraw_template = EmailTemplate::where('id', 3)->first();

        $withdraw_template->title = request('withdraw_title');
        $withdraw_template->subject = request('withdraw_subject');
        $withdraw_template->message = request('withdraw_message');

        $withdraw_template->update();

        return redirect()->route('template.index');
    }

    public function buy_template_update(){
        $data = request()->validate([
            'buy_title' => 'required|string|min: 5',
            'buy_subject' => 'required|string|min: 5',
            'buy_message'=> 'required'
        ]);

        $buy_template = EmailTemplate::where('id', 4)->first();

        $buy_template->title = request('buy_title');
        $buy_template->subject = request('buy_subject');
        $buy_template->message = request('buy_message');

        $buy_template->update();

        return redirect()->route('template.index');
    }

    public function sell_template_update(){
        $data = request()->validate([
            'sell_title' => 'required|string|min: 5',
            'sell_subject' => 'required|string|min: 5',
            'sell_message'=> 'required'
        ]);

        $sell_template = EmailTemplate::where('id', 5)->first();

        $sell_template->title = request('sell_title');
        $sell_template->subject = request('sell_subject');
        $sell_template->message = request('sell_message');

        $sell_template->update();

        return redirect()->route('template.index');
    }
}
