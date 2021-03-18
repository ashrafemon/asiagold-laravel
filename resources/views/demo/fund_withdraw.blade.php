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
			<form class="kt-form">
				<div class="kt-portlet__body">

					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Account Holder Name:</label>
								<input type="text" class="form-control" id="withdraw_ac_holder" placeholder="Enter Account Holder Name">
							</div>
							<div class="form-group">
								<label>Account Number:</label>
								<input type="text" class="form-control" id="withdraw_ac_holder" placeholder="Enter Account Holder Number">
							</div>
							<div class="form-group">
								<label>Account Holder IBAN:</label>
								<input type="text" class="form-control" id="withdraw_ac_holder_iban" placeholder="Enter Account Holder IBAN">
							</div>
							<div class="form-group">
								<label for="withdraw_balance_type">Balance Type:</label>
								<select class="form-control kt-selectpicker" id="withdraw_balance_type">
									<option>EUR</option>
									<option>USD</option>
								</select>
							</div>
							<div class="form-group">
								<label>Comments:</label>
								<input type="text" class="form-control" id="withdraw_comments" placeholder="Comments">
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Bank Name:</label>
								<input type="text" class="form-control" id="withdraw_bank_name" placeholder="Enter Bank Name">
							</div>
							<div class="form-group">
								<label>Bank Address:</label>
								<input type="text" class="form-control" id="withdraw_bank_address" placeholder="Enter Bank Address">
							</div>
							<div class="form-group">
								<label>SWIFT/BIC/National Bank ID:</label>
								<input type="text" class="form-control" id="withdraw_bank_id" placeholder="Enter SWIFT/BIC/National Bank ID">
							</div>
							<div class="form-group">
								<label>Amount:</label>
								<input type="text" class="form-control" id="withdraw_amount" placeholder="Enter Amount">
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-secondary">Cancel</button>
						<button type="reset" class="btn btn-gold">Submit</button>
					</div>
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection