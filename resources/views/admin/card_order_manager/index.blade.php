@extends('layouts.admin')

@section('title', 'Card Order Manager')

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

			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Approved Card Order
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
												<th>Amount</th>
												<th>Currency</th>
												<th>Gold Price</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($approve_orders as $order)
											<tr>
												<td>{{$order->id}}</td>
												<td>{{$order->user->name}}</td>
												<td>${{$order->card_amount}}</td>
												<td>{{$order->currency}}</td>
												<td>${{$order->gold_price}}</td>
												<td>
													<span class="badge badge-success">{{$order->card_order_status}}</span>
												</td>
												<td>
													<a href="{{route('order.card.manage.edit', $order->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('order.card.manage.destroy', $order->id)}}">
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
														{{$approve_orders->links()}}
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
										Pending Card Order
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
												<th>Amount</th>
												<th>Currency</th>
												<th>Gold Price</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pending_orders as $order)
											<tr>
												<td>{{$order->id}}</td>
												<td>{{$order->user->name}}</td>
												<td>${{$order->card_amount}}</td>
												<td>{{$order->currency}}</td>
												<td>${{$order->gold_price}}</td>
												<td>
													<span class="badge badge-warning">{{$order->card_order_status}}</span>
												</td>
												<td>
													<a href="{{route('order.card.manage.edit', $order->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('order.card.manage.destroy', $order->id)}}">
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
														{{$pending_orders->links()}}
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