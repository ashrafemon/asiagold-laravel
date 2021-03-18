@extends('layouts.admin')

@section('title', 'Notification Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Notification Manager
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Notifications
							</h3>
						</div>
						<div class="kt-portlet__head-toolbar">
							<div class="kt-portlet__head-actions">
								<a href="{{route('notification.manage.create')}}" class="btn btn-gold btn-sm">
									Set Notification
								</a>
							</div>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Title</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($notifications as $notify)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$notify->user->name}} ({{$notify->user->email}})</td>
										<td>{{$notify->notification_title}}</td>
										<td>
											<a href="{{route('notification.manage.edit', $notify->id)}}" class="btn btn-warning">Edit</a>
											<form action="{{route('notification.manage.destroy', $notify->id)}}" class="d-inline" method="POST">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-danger">Delete</button>
											</form>
										</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection