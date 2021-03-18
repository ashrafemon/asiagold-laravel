@extends('layouts.admin')

@section('title', 'Edit Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Buy Gold Manager
					</h3>
				</div>
			</div>
			<form action="{{route('buy.gold.manage.update', $buy_gold->id)}}" method="POST">
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
						<label for="">User</label>
						<input type="text" class="form-control" name="user_id" value="{{$buy_gold->user->name}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Name</label>
						<input type="text" class="form-control" name="gold_name" value="{{$buy_gold->gold_name}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Quantity</label>
						<input type="text" class="form-control" name="gold_quantity" value="{{$buy_gold->gold_quantity}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Unit Price</label>
						<input type="text" class="form-control" name="gold_unit_price" value="{{$buy_gold->gold_unit_price}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Unit Price</label>
						<input type="text" class="form-control" name="gold_sub_total_price" value="{{$buy_gold->gold_sub_total_price}}" disabled>
					</div>

					<div class="form-group">
						<label for="">Status</label>
						<select name="gold_buy_status" class="form-control kt-selectpicker">
							@if($buy_gold->gold_buy_status == 'approve')
							<option value="approve" selected="true">Approve</option>
							<option value="pending">Pending</option>
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