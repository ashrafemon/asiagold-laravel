@extends('layouts.admin')

@section('title', 'Account Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Account Manager
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Deposit Transaction
							</h3>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Deposit Type</th>
										<th>Deposit Amount</th>
									</tr>
								</thead>
								<tbody>
									@foreach($deposits as $deposit)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$deposit->user->name}}</td>
										<td>{{$deposit->deposit_type}}</td>
										<td>${{$deposit->deposit_amount}}</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									@if($deposit_total == 0)
									<tr>
										<th colspan="4"><strong>None of user deposit...</strong></th>
									</tr>
									@else
									<tr>
										<th colspan="3">Total</th>
										<th>${{$deposit_total}}</th>
									</tr>
									@endif
									<tr>
										<td colspan="4">
											<div class="d-flex justify-content-center">
												{{$deposits->links()}}
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Withdraw Transaction
							</h3>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Withdraw Amount</th>
									</tr>
								</thead>
								<tbody>
									@foreach($withdraws as $withdraw)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$withdraw->user->name}}</td>
										<td>${{$withdraw->withdraw_amount}}</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									@if($withdraw_total == 0)
									<tr>
										<th colspan="4"><strong>None of user withdraw...</strong></th>
									</tr>
									@else
									<tr>
										<th colspan="3">Total</th>
										<th>${{$withdraw_total}}</th>
									</tr>
									@endif
									<tr>
										<td colspan="3">
											<div class="d-flex justify-content-center">
												{{$withdraws->links()}}
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Buy Gold Transaction
							</h3>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Gold Name</th>
										<th>Gold Quantity</th>
										<th>Total Price</th>
									</tr>
								</thead>
								<tbody>
									@foreach($buy_golds as $buy)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$buy->user->name}}</td>
										<td>{{$buy->gold_name}}</td>
										<td>{{$buy->gold_quantity}}</td>
										<td>${{$buy->gold_sub_total_price}}</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									@if($buy_gold_total == 0)
									<tr>
										<th colspan="5"><strong>None of gold were bought by users</strong></th>
									</tr>
									@else
									<tr>
										<th colspan="4">Total</th>
										<th>${{$buy_gold_total}}</th>
									</tr>
									@endif
									<tr>
										<td colspan="5">
											<div class="d-flex justify-content-center">
												{{$buy_golds->links()}}
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>

				</div>

				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Sell Gold Transaction
							</h3>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>User Name</th>
										<th>Gold Name</th>
										<th>Gold Quantity</th>
										<th>Total Price</th>
									</tr>
								</thead>
								<tbody>
									@foreach($sell_golds as $sell)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$sell->user->name}}</td>
										<td>{{$sell->gold_name}}</td>
										<td>{{$sell->gold_quantity}}</td>
										<td>${{$sell->gold_sub_total_price}}</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									@if($sell_gold_total == 0)
									<tr>
										<th colspan="5"><strong>None of gold were sold by users</strong></th>
									</tr>
									@else
									<tr>
										<th colspan="4">Total</th>
										<th>${{$sell_gold_total}}</th>
									</tr>
									@endif
									<tr>
										<td colspan="5">
											<div class="d-flex justify-content-center">
												{{$sell_golds->links()}}
											</div>
										</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>

				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								New Clients
							</h3>
						</div>
					</div>

					<div class="kt-portlet__body">
						<div class="table-responsive">
							<table class="table text-center">
								<thead class="thead-light">
									<tr>
										<th>ID</th>
										<th>Name</th>
										<th>Email</th>
										<th>Country</th>
										<th>Sign Up</th>
									</tr>
								</thead>
								<tbody>
									@foreach($users as $user)
									<tr>
										<td>{{$loop->index + 1}}</td>
										<td>{{$user->name}}</td>
										<td>{{$user->email}}</td>
										<td>{{$user->country}}</td>
										<td>{{$user->created_at}}</td>
									</tr>
									@endforeach
								</tbody>
								<tfoot class="thead-light">
									@if(count($users) == 0)
									<tr>
										<th colspan="5"><strong>None of users sign up</strong></th>
									</tr>
									@endif
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