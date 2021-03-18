@extends('layouts.admin')

@section('title', 'Edit Deposit')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Deposit Manager
					</h3>
				</div>
			</div>
			<form action="{{route('deposit.manage.update', $deposit->id)}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="kt-portlet__body">
					<div class="form-group">
						<label for="">User Name</label>
						<input type="text" class="form-control" name="user_id" value="{{$deposit->user->name}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Deposit Type</label>
						<input type="text" class="form-control" name="deposit_type" value="{{$deposit->deposit_type}}" disabled>
					</div>
					<div class="form-group">
						<label for="">Amount</label>
						<input type="text" class="form-control" name="deposit_amount" value="{{$deposit->deposit_amount}}">
						<span class="text-danger">{{$errors->first('deposit_amount')}}</span>
					</div>
					<div class="form-group">
						<label for="">Status</label>
						<select name="deposit_status" class="form-control kt-selectpicker">
							@if($deposit->deposit_status == 'approve')
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
					<button type="submit" class="btn btn-primary">Update Deposit</button>
				</div>
			</form>
			
		</div>
	</div>
</div>

@endsection