<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\SystemVariable;

class SystemConfController extends Controller
{
    public function __construct(){

    	$this->middleware('auth');

    }

    public function index(){
    	$system_var = SystemVariable::first();
    	return view('admin.system_var.index', compact('system_var'));
    }

    public function update(){
        $data = request()->validate([
            'password_length' => 'numeric',
            'max_attempts' => 'numeric',
            'interest_rate' => 'numeric',
            'commisions_rate' => 'numeric',
            'sales_rate' => 'numeric'
        ]);

        $system_var = SystemVariable::where('id', 1)->update($data);

        
        return redirect()->route('conf.index');
    }


}
