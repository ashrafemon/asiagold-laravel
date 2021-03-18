@extends('layouts.admin')

@section('title', 'Deposit Manager')

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

			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Approved Deposit
									</h4>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>User</th>
												<th>Deposit Type</th>
												<th>Amount</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($approve_deposits as $deposit)
											<tr>
												<td>{{$deposit->id}}</td>
												<td>{{$deposit->user->name}}</td>
												<td>{{$deposit->deposit_type}}</td>
												<td>{{$deposit->deposit_amount}}</td>
												<td><span class="badge badge-success">{{$deposit->deposit_status}}</span></td>
												<td>
													<a href="{{route('deposit.manage.edit', $deposit->id)}}" class="btn btn-warning btn-sm">Edit</a>

													<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
													  Delete
													</button>

													<!-- Modal -->
													<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													  <div class="modal-dialog modal-dialog-centered" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
													          <span aria-hidden="true">&times;</span>
													        </button>
													      </div>
													      <div class="modal-body">
													        <h3 class="kt-font-danger">Are you sure? You want to delete It</h3>
													      </div>
													      <div class="modal-footer">
													      	<form class="d-inline" method="POST" action="{{route('deposit.manage.destroy', $deposit->id)}}">
																@csrf
																@method('DELETE')
																<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-danger btn-sm">Delete</button>
															</form>
													      </div>
													    </div>
													  </div>
													</div>
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="8">
													<div class="d-flex justify-content-center">
														{{$approve_deposits->links()}}
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
										Pending Deposit
									</h4>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>User</th>
												<th>Deposit Type</th>
												<th>Amount</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pending_deposits as $deposit)
											<tr>
												<td>{{$deposit->id}}</td>
												<td>{{$deposit->user->name}}</td>
												<td>{{$deposit->deposit_type}}</td>
												<td>{{$deposit->deposit_amount}}</td>
												<td><span class="badge badge-warning">{{$deposit->deposit_status}}</span></td>
												<td>
													<a href="{{route('deposit.manage.edit', $deposit->id)}}" class="btn btn-warning btn-sm">Edit</a>

													<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalCenter">
													  Delete
													</button>

													<!-- Modal -->
													<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
													  <div class="modal-dialog modal-dialog-centered" role="document">
													    <div class="modal-content">
													      <div class="modal-header">
													        <h5 class="modal-title" id="exampleModalCenterTitle">Confirmation</h5>
													        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
													          <span aria-hidden="true">&times;</span>
													        </button>
													      </div>
													      <div class="modal-body">
													        <h3 class="kt-font-danger">Are you sure? You want to delete It</h3>
													      </div>
													      <div class="modal-footer">
													      	<form class="d-inline" method="POST" action="{{route('deposit.manage.destroy', $deposit->id)}}">
																@csrf
																@method('DELETE')
																<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
																<button type="submit" class="btn btn-danger btn-sm">Delete</button>
															</form>
													      </div>
													    </div>
													  </div>
													</div>
													
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="8">
													<div class="d-flex justify-content-center">
														{{$pending_deposits->links()}}
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