@extends('layouts.client')

@section('title', 'Gold Loan')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Loan
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-actions">
						<a href="{{route('gold.loan.create')}}" class="btn btn-gold btn-sm">
							Apply for a gold loan
						</a>
					</div>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-12">
							<div class="kt-portlet">
								<div class="kt-portlet__head">
									<div class="kt-portlet__head-label">
										<h3 class="kt-portlet__head-title">
											Gold Loan Approve
										</h3>
									</div>
								</div>
								<div class="kt-portlet__body">
									@if(count($gold_loans) == 0)
										<h4>No Data Found!</h4>
									@else
										@foreach($gold_loans as $loan)
										<div class="table-responsive">
											<table class="table">
												<tr>
					                                <td width="50%">Amount Loan:</td>
					                                <td width="50%"><strong>${{$loan->loan_amount}}</strong></td>
					                            </tr>
					                            <tr>
					                                <td width="50%">Monthly Payment Date:</td>
					                                <td width="50%">
					                                	<strong>
					                                		{{date("d-m-Y", strtotime("+1 month", strtotime($loan->created_at) ))}}
					                                	</strong>
					                                </td>
					                            </tr>
					                            <tr>
					                                <td width="50%">Interest Rate</td>
					                                <td width="50%"><strong>{{$loan->interest_rate}}%</strong></td>
					                            </tr>
					                            <tr>
					                                <td width="50%">Remains Loan</td>
					                                <td width="50%"><strong>${{$loan->remains_loan}}</strong></td>
					                            </tr>
					                            <tr>
					                                <td width="50%">Remains Months Left</td>
					                                <td width="50%"><strong>{{$loan->loan_months}}</strong></td>
					                            </tr>
					                            <tr>
					                                <td colspan="2">
					                                    <div class="alert alert-danger">
					                                        <strong>You are not paying monthly loan payment. if not paid shows overdue notice warning to pay it at once</strong>
					                                    </div>
					                                </td>
					                            </tr>
											</table>
										</div>
										@endforeach
									@endif
								</div>
							</div>
							
						</div>
					</div>
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection