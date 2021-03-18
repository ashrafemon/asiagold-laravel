@extends('layouts.client')

@section('title', 'Sell Gold')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Invoice 
						<small>Sample User Invoice Design</small>
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
									<th>PRODUCT</th>
									<th>IMAGE</th>
									<th>DESCRIPTION</th>
									<th>QUANTITY</th>
									<th>USD</th>
									<th>EUR</th>
									<th>BTC</th>
									<th>UNIT PRICE</th>
									<th>SUBTOTAL</th>
								</tr>
							</thead>
							<tbody>
								
								<tr>
									<td>1 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input type="text" class="form-control text-center kt_touchspin_3" value="0" placeholder="Select time">
									</td>
									<td>500</td>
									<td>600</td>
									<td>700</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
							</tbody>
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="7"></th>
									<th>TOTAL</th>
									<th>$600</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection