<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Gold;

class GoldManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$golds = Gold::all();
    	return view('admin.gold_manager.index', compact('golds'));
    }

    public function create(){
    	return view('admin.gold_manager.create');
    }

    public function store(){
    	$gold = new Gold();

    	$gold->gold_name = request('gold_name');
    	$gold->gold_size = request('gold_size');
    	$gold->gold_description = request('gold_description');
    	$gold->gold_unit_price = request('gold_unit_price');
        $gold->gold_amount = request('gold_amount');

    	$gold->save();

    	return redirect()->route('gold.manage.index')->with('message', 'Successfully Add Gold');
    }

    public function edit($id){
    	$gold = Gold::where('id', $id)->first();
    	return view('admin.gold_manager.edit', compact('gold'));
    }

    public function update(Request $request, $id){
    	$gold = Gold::where('id', $id)->first();

    	$gold->gold_name = request('gold_name');
        $gold->gold_size = request('gold_size');
        $gold->gold_description = request('gold_description');
        $gold->gold_unit_price = request('gold_unit_price');
        $gold->gold_amount = request('gold_amount');

    	$gold->update();

    	return redirect()->route('gold.manage.index')->with('message','Successfully Update Gold');
    }

    public function destroy($id){
    	$gold = Gold::where('id', $id)->delete();

    	return redirect()->route('gold.manage.index')->with('message', 'Successfully Delete Gold');
    }
}
