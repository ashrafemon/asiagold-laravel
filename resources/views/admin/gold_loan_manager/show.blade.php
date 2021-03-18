@extends('layouts.admin')

@section('title', 'View Gold Loan')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Loan Manager
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>ID</th>
							<td>{{$gold_loan->id}}</td>
						</tr>
						<tr>
							<th>User Name</th>
							<td>{{$gold_loan->user->name}}</td>
						</tr>
						<tr>
							<th>Loan Amount</th>
							<td>${{$gold_loan->loan_amount}}</td>
						</tr>
						<tr>
							<th>Loan Duration</th>
							<td>{{$gold_loan->loan_months}} Months</td>
						</tr>
						<tr>
							<th>Monthly Repayment</th>
							<td>${{$gold_loan->monthly_repayment}}</td>
						</tr>
						<tr>
							<th>Completion Fee</th>
							<td>${{$gold_loan->completion_fee}}</td>
						</tr>
						<tr>
							<th>Interest Rate</th>
							<td>${{$gold_loan->interest_rate}}</td>
						</tr>
						<tr>
							<th>Gold Total Price</th>
							<td>${{$gold_loan->gold_price}}</td>
						</tr>
						<tr>
							<th>Remains Loan</th>
							<td>${{$gold_loan->remains_loan}}</td>
						</tr>
						<tr>
							<th>Total Payable</th>
							<td>${{$gold_loan->total_payable}}</td>
						</tr>
						<tr>
							<th>Status</th>
							<td>{{$gold_loan->gold_loan_status}}</td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
								@if($gold_loan->gold_loan_status == 'approve')
								<form action="{{route('loan.gold.manage.destroy', $gold_loan->id)}}" method="POST" class="d-inline">
									@csrf
									@method('DELETE')
									<button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
								</form>
								@else
								<a href="{{route('loan.gold.manage.edit', $gold_loan->id)}}" class="btn btn-warning btn-sm">Edit</a>
								<form action="{{route('loan.gold.manage.destroy', $gold_loan->id)}}" method="POST" class="d-inline">
									@csrf
									@method('DELETE')
									<button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
								</form>
								@endif
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection