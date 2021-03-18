@extends('layouts.admin')

@section('title', 'Withdraw Manager')

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
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Approved Withdraw
									</h4>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>AC Holder Name</th>
												<th>Bank Name</th>
												<th>Amount</th>
												<th>Balance Type</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($approve_withdraws as $withdraw)
											<tr>
												<td>{{$withdraw->id}}</td>
												<td>{{$withdraw->ac_holder_name}}</td>
												<td>{{$withdraw->bank_name}}</td>
												<td>{{$withdraw->withdraw_amount}}</td>
												<td>{{$withdraw->balance_type}}</td>
												<td><span class="badge badge-success">{{$withdraw->withdraw_status}}</span></td>
												<td>
													<a href="{{route('withdraw.manage.show', $withdraw->id)}}" class="btn btn-primary btn-sm">View</a>
													<a href="{{route('withdraw.manage.edit', $withdraw->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('withdraw.manage.destroy', $withdraw->id)}}">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-danger btn-sm">Delete</button>
													</form>
													
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="12">
													<div class="d-flex justify-content-center">
														{{$approve_withdraws->links()}}
													</div>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Pending Withdraw
									</h4>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>AC Holder Name</th>
												<th>Bank Name</th>
												<th>Amount</th>
												<th>Balance Type</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pending_withdraws as $withdraw)
											<tr>
												<td>{{$withdraw->id}}</td>
												<td>{{$withdraw->ac_holder_name}}</td>
												<td>{{$withdraw->bank_name}}</td>
												<td>{{$withdraw->withdraw_amount}}</td>
												<td>{{$withdraw->balance_type}}</td>
												<td><span class="badge badge-warning">{{$withdraw->withdraw_status}}</span></td>
												<td>
													<a href="{{route('withdraw.manage.show', $withdraw->id)}}" class="btn btn-primary btn-sm">View</a>
													<a href="{{route('withdraw.manage.edit', $withdraw->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('withdraw.manage.destroy', $withdraw->id)}}">
														@csrf
														@method('DELETE')
														<button type="submit" class="btn btn-danger btn-sm">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="12">
													<div class="d-flex justify-content-center">
														{{$pending_withdraws->links()}}
													</div>
												</td>
											</tr>
										</tfoot>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection