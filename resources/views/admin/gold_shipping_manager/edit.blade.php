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
			<form action="{{route('ship.gold.manage.update', $gold_shipping->id)}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="kt-portlet__body">
					@if(Session::has('cart_message_failed'))
					<div class="alert alert-danger alert-dismissible fade show" role="alert">
						<strong>{{Session::get('cart_message_failed')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif

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
						<input type="text" class="form-control" name="user_id" value="{{$gold_shipping->user_id}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Person Name</label>
						<input type="text" class="form-control" name="shipping_person_name" value="{{$gold_shipping->shipping_person_name}}" disabled>
					</div>

					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="gold_name" value="{{$gold_shipping->gold_name}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Quantity</label>
						<input type="text" class="form-control" name="gold_quantity" value="{{$gold_shipping->gold_quantity}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Unit Price</label>
						<input type="text" class="form-control" name="gold_unit_price" value="{{$gold_shipping->gold_unit_price}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Total Price</label>
						<input type="text" class="form-control" name="gold_sub_total_price" value="{{$gold_shipping->gold_sub_total_price}}" disabled>
					</div>
					<div class="form-group">
						<label for="">House</label>
						<input type="text" class="form-control" name="shipping_house" value="{{$gold_shipping->shipping_house}}">
					</div>
					<div class="form-group">
						<label for="">Address</label>
						<input type="text" class="form-control" name="shipping_address" value="{{$gold_shipping->shipping_address}}">
					</div>
					<div class="form-group">
						<label for="">City</label>
						<input type="text" class="form-control" name="shipping_city" value="{{$gold_shipping->shipping_city}}">
					</div>
					<div class="form-group">
						<label for="">Street</label>
						<input type="text" class="form-control" name="shipping_street" value="{{$gold_shipping->shipping_street}}">
					</div>
					<div class="form-group">
						<label for="">WhatsApp Number</label>
						<input type="text" class="form-control" name="shipping_whatsapp_number" value="{{$gold_shipping->shipping_whatsapp_number}}">
					</div>
					<div class="form-group">
						<label for="">Phone</label>
						<input type="text" class="form-control" name="shipping_phone" value="{{$gold_shipping->shipping_phone}}">
					</div>
					<div class="form-group">
						<label for="">Cost</label>
						<input type="text" class="form-control" name="shipping_cost" value="{{$gold_shipping->shipping_cost}}">
					</div>

					<div class="form-group">
						<label for="">Status</label>
						<select name="shipping_status" class="form-control kt-selectpicker">
							@if($gold_shipping->shipping_status == 'approve')
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