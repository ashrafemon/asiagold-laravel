@extends('layouts.admin')

@section('title', 'View Member')

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
				<div class="table-responsive">
					<table class="table">
						<tr>
							<th>ID</th>
							<td>{{$member->id}}</td>
						</tr>
						<tr>
							<th>Name</th>
							<td>{{$member->name}}</td>
						</tr>
						<tr>
							<th>Username</th>
							<td>{{$member->username}}</td>
						</tr>
						<tr>
							<th>Phone</th>
							<td>{{$member->phone}}</td>
						</tr>
						<tr>
							<th>Country</th>
							<td>{{$member->country}}</td>
						</tr>
						<tr>
							<th>Role</th>
							<td>{{$member->role->name}}</td>
						</tr>
						<tr>
							<th>Status</th>
							<td>{{$member->status}}</td>
						</tr>
						<tr>
							<th>Client Ip</th>
							<td>{{request()->ip()}}</td>
						</tr>
						<tr>
							<th>Action</th>
							<td>
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
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection