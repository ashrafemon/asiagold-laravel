@extends('layouts.admin')

@section('title', 'View Withdraw')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Withdraw Manager
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>ID</th>
							<td>{{$withdraw->id}}</td>
						</tr>
						<tr>
							<th>User</th>
							<td>{{$withdraw->user->name}}</td>
						</tr>
						<tr>
							<th>Account Holder Name</th>
							<td>{{$withdraw->ac_holder_name}}</td>
						</tr>
						<tr>
							<th>Account Holder Number</th>
							<td>{{$withdraw->ac_holder_number}}</td>
						</tr>
						<tr>
							<th>Account Holder IBAN</th>
							<td>{{$withdraw->ac_holder_iban}}</td>
						</tr>
						<tr>
							<th>Bank Name</th>
							<td>{{$withdraw->bank_name}}</td>
						</tr>
						<tr>
							<th>Bank Address</th>
							<td>{{$withdraw->bank_address}}</td>
						</tr>
						<tr>
							<th>Bank ID</th>
							<td>{{$withdraw->bank_id}}</td>
						</tr>
						<tr>
							<th>Withdraw Amount</th>
							<td>{{$withdraw->withdraw_amount}}</td>
						</tr>
						<tr>
							<th>Balance Type</th>
							<td>{{$withdraw->balance_type}}</td>
						</tr>
						<tr>
							<th>Status</th>
							<td>{{$withdraw->withdraw_status}}</td>
						</tr>
						<tr>
							<th>Comments</th>
							<td>{{$withdraw->comments}}</td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
								<a href="{{route('withdraw.manage.edit', $withdraw->id)}}" class="btn btn-warning btn-sm">Edit</a>
								<form action="{{route('withdraw.manage.destroy', $withdraw->id)}}" method="POST" class="d-inline">
									@csrf
									@method('DELETE')
									<button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
								</form>
							</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection