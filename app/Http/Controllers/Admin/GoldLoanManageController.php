<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\GoldLoan;

class GoldLoanManageController extends Controller
{
    public function __construct(){
    	$this->middleware('auth');
    }

    public function index(){
    	$approve_gold_loans = GoldLoan::where('gold_loan_status', 'approve')->paginate(5);
    	$pending_gold_loans = GoldLoan::where('gold_loan_status', 'pending')->paginate(5);
    	return view('admin.gold_loan_manager.index', compact('approve_gold_loans', 'pending_gold_loans'));
    }

    public function show($id){
    	$gold_loan = GoldLoan::where('id', $id)->first();
    	return view('admin.gold_loan_manager.show', compact('gold_loan'));
    }

    public function edit($id){
    	$gold_loan = GoldLoan::where('id', $id)->first();
    	return view('admin.gold_loan_manager.edit',compact('gold_loan'));
    }

    public function update($id){
		$gold_loan = GoldLoan::where('id', $id)->first();

    	if($gold_loan->gold_loan_status == request('gold_loan_status')){
            return redirect()->route('loan.gold.manage.edit', $gold_loan->id)->with('same_message', 'Are you joking with me?');
        }

        $gold_loan->gold_loan_status = request('gold_loan_status');
        $gold_loan->update();

    	return redirect()->route('loan.gold.manage.index');
    }

    public function destroy($id){
    	$gold_loan = GoldLoan::where('id', $id)->delete();

    	return redirect()->route('loan.gold.manage.index');
    }
}
