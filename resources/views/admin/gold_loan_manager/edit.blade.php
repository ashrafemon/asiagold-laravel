@extends('layouts.admin')

@section('title', 'Edit Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Shipping Manager
					</h3>
				</div>
			</div>
			<form action="{{route('loan.gold.manage.update', $gold_loan->id)}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="kt-portlet__body">
					
					@if(Session::has('same_message'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{Session::get('same_message')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif

					<div class="form-group">
						<label for="">User ID</label>
						<input type="text" class="form-control" name="user_id" value="{{$gold_loan->user_id}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Loan Amount</label>
						<input type="text" class="form-control" name="loan_amount" value="{{$gold_loan->loan_amount}}" disabled>
					</div>

					<div class="form-group">
						<label for="">Loan Duration</label>
						<input type="text" class="form-control" name="loan_months" value="{{$gold_loan->loan_months}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Monthly Repayment</label>
						<input type="text" class="form-control" name="monthly_repayment" value="{{$gold_loan->monthly_repayment}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Completion Fee</label>
						<input type="text" class="form-control" name="completion_fee" value="{{$gold_loan->completion_fee}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Interest Rate</label>
						<input type="text" class="form-control" name="interest_rate" value="{{$gold_loan->interest_rate}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Gold Total Price</label>
						<input type="text" class="form-control" name="gold_price" value="{{$gold_loan->gold_price}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Remains Loan</label>
						<input type="text" class="form-control" name="remains_loan" value="{{$gold_loan->remains_loan}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Total Payable</label>
						<input type="text" class="form-control" name="total_payable" value="{{$gold_loan->total_payable}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Status</label>
						<select name="gold_loan_status" class="form-control kt-selectpicker">
							@if($gold_loan->gold_loan_status == 'approve')
							<option value="approve" selected="true">Approve</option>
							<option value="pending" disabled>Pending</option>
							@else
							<option value="approve">Approve</option>
							<option value="pending" selected="true">Pending</option>
							@endif
						</select>
					</div>
				</div>

				<div class="kt-portlet__foot">
					<button type="submit" class="btn btn-primary">Update</button>
				</div>
			</form>
			
		</div>
	</div>
</div>

@endsection