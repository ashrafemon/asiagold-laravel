@extends('layouts.client')

@section('title', 'Gold Vault')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Vault
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-lg-3 col-md-4 col-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										Show
									</span>
								</div>
								<select class="form-control kt-selectpicker">
									<option>10</option>
									<option>20</option>
									<option>30</option>
								</select>
								<div class="input-group-append">
									<span class="input-group-text">
										entries
									</span>
								</div>
							</div>
						</div>
						<div class="offset-lg-6 col-lg-3 col-md-4 col-6">
							<div class="form-group">
								<div class="kt-input-icon kt-input-icon--left">
									<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
									<span class="kt-input-icon__icon kt-input-icon__icon--left">
										<span><i class="la la-search"></i></span>
									</span>
								</div>
							</div>
						</div>
					</div>
					<div class="table-responsive">
						<table class="table text-center">
							<thead class="thead-light">
								<tr>
									<th>#ID</th>
									<th>WEIGHT (GRAMS)</th>
									<th>QUANTITY</th>
									<th>USD</th>
									<th>EUR</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<th scope="row">1</th>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50"> <span>1 grams bar</span>
									</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>325325</td>
									<td>54353</td>
								</tr>
								<tr>
									<th scope="row">2</th>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50"> <span>1 grams bar</span>
									</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>325325</td>
									<td>54353</td>
								</tr>
								<tr>
									<th scope="row">3</th>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50"> <span>1 grams bar</span>
									</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>325325</td>
									<td>54353</td>
								</tr>
								
							</tbody>
						</table>
					</div>
					<div class="row mt-3">
						<div class="col-12">
							<button class="btn btn-gold btn-sm">Show Insurance</button>
							<button class="btn btn-gold btn-sm">Ownership</button>
							<button class="btn btn-gold btn-sm">Audit Report</button>
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