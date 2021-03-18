@extends('layouts.client')

@section('title', 'Gold Shipping')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Add Shipping Detail
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					
					<div class="table-responsive">
						<table class="table text-center">
							<thead class="thead-light">
								<tr>
									<th>PRODUCT</th>
									<th>IMAGE</th>
									<th>DESCRIPTION</th>
									<th>QUANTITY</th>
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
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>2.5 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>5 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>10 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>20 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>34.99 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>50 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>100 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>250 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>500 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>1000 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
							</tbody>
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="4"></th>
									<th>TOTAL</th>
									<th>$600</th>
								</tr>
							</tfoot>
						</table>
					</div>

					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Person Name:</label>
								<input type="text" class="form-control" id="shipping_person_name" placeholder="Enter Person Name">
							</div>
							<div class="form-group">
								<label>House#:</label>
								<input type="text" class="form-control" id="shipping_house" placeholder="Enter House">
							</div>
							<div class="form-group">
								<label>City:</label>
								<input type="text" class="form-control" id="shipping_city" placeholder="Enter City">
							</div>
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control" id="shipping_address" placeholder="Enter Address">
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Street:</label>
								<input type="text" class="form-control" id="shipping_street" placeholder="Enter Street">
							</div>
							<div class="form-group">
								<label>WhatsApp Number:</label>
								<input type="text" class="form-control" id="shipping_whatsapp_number" placeholder="Enter WhatsApp Number">
							</div>
							<div class="form-group">
								<label>Phone:</label>
								<input type="text" class="form-control" id="shipping_phone_number" placeholder="Enter Phone">
							</div>
							<div class="form-group">
								<label>Shipping Cost:</label>
								<input type="text" class="form-control" id="shipping_cost" placeholder="Enter Shipping Cost" value="$90" disabled>
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