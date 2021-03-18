@extends('layouts.admin')

@section('title', 'Member Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Member Manager
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
										All Member
									</h4>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>Name</th>
												<th>Username</th>
												<th>Email</th>
												<th>Phone</th>
												<th>Role</th>
												<th>Country</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($members as $member)
											<tr>
												<td>{{$member->id}}</td>
												<td>{{$member->name}}</td>
												<td>{{$member->username}}</td>
												<td>{{$member->email}}</td>
												<td>{{$member->phone}}</td>
												<td>{{$member->role->name}}</td>
												<td>{{$member->country}}</td>
												<td>{{$member->status}}</td>
												<td>
													<a href="{{route('member.show', $member->id)}}" class="btn btn-primary btn-sm">View</a>
													<a href="{{route('member.edit', $member->id)}}" class="btn btn-warning btn-sm">Edit</a>
													@if(Auth::user()->id == $member->id )
														<button class="btn btn-danger btn-sm" disabled="true">Delete</button>
													@else
														<form action="{{route('member.destroy', $member->id)}}" method="POST" class="d-inline">
															@csrf
															@method('DELETE')
															<button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
														</form>
													@endif
													
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="8">
													<div class="d-flex justify-content-center">
														{{ $members->links() }}
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