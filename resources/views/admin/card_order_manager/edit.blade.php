@extends('layouts.admin')

@section('title', 'Edit Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Card Order Manager
					</h3>
				</div>
			</div>
			<form action="{{route('order.card.manage.update', $order->id)}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="kt-portlet__body">
					
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
						<input type="text" class="form-control" name="user_id" value="{{$order->user_id}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Card Amount</label>
						<input type="text" class="form-control" name="card_amount" value="{{$order->card_amount}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Card Currency</label>
						<select name="card_currency" class="form-control kt-selectpicker">
							@if($order->card_currency == 'usd')
							<option value="usd" selected="true">USD</option>
							<option value="eur">EUR</option>
							@else
							<option value="usd">USD</option>
							<option value="eur" selected="true">EUR</option>
							@endif
						</select>
					</div>
					<div class="form-group">
						<label for="">Status</label>
						<select name="card_loan_status" class="form-control kt-selectpicker">
							@if($order->card_order_status == 'approve')
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