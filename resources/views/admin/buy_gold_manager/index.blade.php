@extends('layouts.admin')

@section('title', 'Buy Gold Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Buy Gold Manager
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
										Approved Buy Gold
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
											@foreach($approve_buy_golds as $buy_gold)
											<tr>
												<td>{{$buy_gold->id}}</td>
												<td>{{$buy_gold->user->name}}</td>
												<td>{{$buy_gold->gold_name}}</td>
												<td>{{$buy_gold->gold_quantity}}</td>
												<td>{{$buy_gold->gold_unit_price}}</td>
												<td>{{$buy_gold->gold_sub_total_price}}</td>
												<td><span class="badge badge-success">{{$buy_gold->gold_buy_status}}</span></td>
												<td>
													<a href="{{route('buy.gold.manage.edit', $buy_gold->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('buy.gold.manage.destroy', $buy_gold->id)}}">
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
														{{$approve_buy_golds->links()}}
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
										Pending Buy Gold
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
											@foreach($pending_buy_golds as $buy_gold)
											<tr>
												<td>{{$buy_gold->id}}</td>
												<td>{{$buy_gold->user->name}}</td>
												<td>{{$buy_gold->gold_name}}</td>
												<td>{{$buy_gold->gold_quantity}}</td>
												<td>${{$buy_gold->gold_unit_price}}</td>
												<td>${{$buy_gold->gold_sub_total_price}}</td>
												<td><span class="badge badge-warning">{{$buy_gold->gold_buy_status}}</span></td>
												<td>
													<a href="{{route('buy.gold.manage.edit', $buy_gold->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('buy.gold.manage.destroy', $buy_gold->id)}}">
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
														{{$pending_buy_golds->links()}}
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