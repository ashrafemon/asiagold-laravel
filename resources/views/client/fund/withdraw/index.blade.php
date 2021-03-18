@extends('layouts.client')

@section('title', 'Fund Withdraw')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Funds Withdraw
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form" action="{{route('withdraw.add')}}" method="POST">
				@csrf
				<div class="kt-portlet__body">
					@if(Session::has('success'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{Session::get('success')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>
					@endif
	
					@if(Session::has('failed'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{Session::get('failed')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>
					@endif


					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Account Holder Name:</label>
								<input type="text" class="form-control" name="ac_holder_name" placeholder="Enter Account Holder Name" value="{{old('ac_holder_name')}}">
								<span class="text-danger">{{$errors->first('ac_holder_name')}}</span>
							</div>
							<div class="form-group">
								<label>Account Number:</label>
								<input type="text" class="form-control" name="ac_holder_number" placeholder="Enter Account Holder Number" value="{{old('ac_holder_number')}}">
								<span class="text-danger">{{$errors->first('ac_holder_number')}}</span>
							</div>
							<div class="form-group">
								<label>Account Holder IBAN:</label>
								<input type="text" class="form-control" name="ac_holder_iban" placeholder="Enter Account Holder IBAN" value="{{old('ac_holder_iban')}}">
								<span class="text-danger">{{$errors->first('ac_holder_iban')}}</span>
							</div>
							<div class="form-group">
								<label for="withdraw_balance_type">Balance Type:</label>
								<select class="form-control kt-selectpicker" name="balance_type">
									<option value="euro">EUR</option>
									<option value="usd">USD</option>
								</select>
								<span class="text-danger">{{$errors->first('balance_type')}}</span>
							</div>
							<div class="form-group">
								<label>Comments:</label>
								<input type="text" class="form-control" name="comments" placeholder="Comments" value="{{old('comments')}}">
								<span class="text-danger">{{$errors->first('comments')}}</span>
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Bank Name:</label>
								<input type="text" class="form-control" name="bank_name" placeholder="Enter Bank Name" value="{{old('bank_name')}}">
								<span class="text-danger">{{$errors->first('bank_name')}}</span>
							</div>
							<div class="form-group">
								<label>Bank Address:</label>
								<input type="text" class="form-control" name="bank_address" placeholder="Enter Bank Address" value="{{old('bank_address')}}">
								<span class="text-danger">{{$errors->first('bank_address')}}</span>
							</div>
							<div class="form-group">
								<label>SWIFT/BIC/National Bank ID:</label>
								<input type="text" class="form-control" name="bank_id" placeholder="Enter SWIFT/BIC/National Bank ID" value="{{old('bank_id')}}">
								<span class="text-danger">{{$errors->first('bank_id')}}</span>
							</div>
							<div class="form-group">
								<label>Amount:</label>
								<input type="text" class="form-control" name="withdraw_amount" placeholder="Enter Amount" value="{{old('withdraw_amount')}}">
								<span class="text-danger">{{$errors->first('withdraw_amount')}}</span>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-secondary">Cancel</button>
						<button type="submit" class="btn btn-gold">Submit</button>
					</div>
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection