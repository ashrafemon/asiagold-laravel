@extends('layouts.admin')

@section('title', 'View Gold Shipping')

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

			<div class="kt-portlet__body">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>ID</th>
							<td>{{$gold_shipping->id}}</td>
						</tr>
						<tr>
							<th>User ID</th>
							<td>{{$gold_shipping->user_id}}</td>
						</tr>
						<tr>
							<th>Person Name</th>
							<td>{{$gold_shipping->shipping_person_name}}</td>
						</tr>
						<tr>
							<th>Gold Name</th>
							<td>{{$gold_shipping->gold_name}}</td>
						</tr>
						<tr>
							<th>Description</th>
							<td>{{$gold_shipping->gold_description}}</td>
						</tr>
						<tr>
							<th>Quantity</th>
							<td>{{$gold_shipping->gold_quantity}}</td>
						</tr>
						<tr>
							<th>Unit Price</th>
							<td>${{$gold_shipping->gold_unit_price}}</td>
						</tr>
						<tr>
							<th>Total Price</th>
							<td>${{$gold_shipping->gold_sub_total_price}}</td>
						</tr>
						<tr>
							<th>House</th>
							<td>{{$gold_shipping->shipping_house}}</td>
						</tr>
						<tr>
							<th>City</th>
							<td>{{$gold_shipping->shipping_city}}</td>
						</tr>
						<tr>
							<th>Address</th>
							<td>{{$gold_shipping->shipping_address}}</td>
						</tr>
						<tr>
							<th>Street</th>
							<td>{{$gold_shipping->shipping_street}}</td>
						</tr>
						<tr>
							<th>WhatsApp Number</th>
							<td>{{$gold_shipping->shipping_whatsapp_number}}</td>
						</tr>
						<tr>
							<th>Phone</th>
							<td>{{$gold_shipping->shipping_phone}}</td>
						</tr>
						<tr>
							<th>Cost</th>
							<td>${{$gold_shipping->shipping_cost}}</td>
						</tr>
						<tr>
							<th>Status</th>
							<td>{{$gold_shipping->shipping_status}}</td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
								@if($gold_shipping->shipping_status == 'approve')
								
								@else
								<a href="{{route('ship.gold.manage.edit', $gold_shipping->id)}}" class="btn btn-warning btn-sm">Edit</a>
								<form action="{{route('ship.gold.manage.destroy', $gold_shipping->id)}}" method="POST" class="d-inline">
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