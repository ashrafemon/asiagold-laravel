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
						<a href="{{route('add_gold_loan')}}" class="btn btn-gold btn-sm">
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
									<div class="table-responsive">
										<table class="table">
											<tr>
				                                <td>Amount Loan:</td>
				                                <td><strong>$5000</strong></td>
				                            </tr>
				                            <tr>
				                                <td>Monthly Payment Date:</td>
				                                <td><strong>22/04/2019</strong></td>
				                            </tr>
				                            <tr>
				                                <td>Interest Rate</td>
				                                <td><strong>1%</strong></td>
				                            </tr>
				                            <tr>
				                                <td>Remains Loan</td>
				                                <td><strong>$3520</strong></td>
				                            </tr>
				                            <tr>
				                                <td>Remains Months Left</td>
				                                <td><strong>7</strong></td>
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