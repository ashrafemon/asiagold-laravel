@extends('layouts.admin')

@section('title', 'Gold Shipping Manager')

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

			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Approved Gold Shipping
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
												<th>Name</th>
												<th>Quantity</th>
												<th>Unit Price</th>
												<th>Total Price</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($approve_gold_shippings as $gold_ship)
											<tr>
												<td>{{$gold_ship->id}}</td>
												<td>{{$gold_ship->user->name}}</td>
												<td>{{$gold_ship->gold_name}}</td>
												<td>{{$gold_ship->gold_quantity}}</td>
												<td>{{$gold_ship->gold_unit_price}}</td>
												<td>{{$gold_ship->gold_sub_total_price}}</td>
												<td><span class="badge badge-success">{{$gold_ship->shipping_status}}</span></td>
												<td>
													<a href="{{route('ship.gold.manage.show', $gold_ship->id)}}" class="btn btn-primary btn-sm">View</a>
												</td>
											</tr>
											@endforeach
										</tbody>
										<tfoot>
											<tr>
												<td colspan="8">
													<div class="d-flex justify-content-center">
														{{$approve_gold_shippings->links()}}
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
										Pending Gold Shipping
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
												<th>Name</th>
												<th>Quantity</th>
												<th>Unit Price</th>
												<th>Total Price</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pending_gold_shippings as $gold_ship)
											<tr>
												<td>{{$gold_ship->id}}</td>
												<td>{{$gold_ship->user->name}}</td>
												<td>{{$gold_ship->gold_name}}</td>
												<td>{{$gold_ship->gold_quantity}}</td>
												<td>{{$gold_ship->gold_unit_price}}</td>
												<td>{{$gold_ship->gold_sub_total_price}}</td>
												<td><span class="badge badge-warning">{{$gold_ship->shipping_status}}</span></td>
												<td>
													<a href="{{route('ship.gold.manage.show', $gold_ship->id)}}" class="btn btn-primary btn-sm">View</a>
													<a href="{{route('ship.gold.manage.edit', $gold_ship->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('ship.gold.manage.destroy', $gold_ship->id)}}">
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
												<td colspan="8">
													<div class="d-flex justify-content-center">
														{{$pending_gold_shippings->links()}}
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