@extends('layouts.admin')

@section('title', 'Credit Card Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Credit Card Manager
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-actions">
						<a href="{{route('credit.card.manage.create')}}" class="btn btn-gold btn-sm">
							Create Credit Card
						</a>
					</div>
				</div>
			</div>

			<div class="kt-portlet__body">
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										Active Credit Card
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
												<th>Holder Name</th>
												<th>Amount</th>
												<th>Expire</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($active_credit_cards as $card)
											<tr>
												<td>{{$card->id}}</td>
												<td>{{$card->user->name}}</td>
												<td>{{$card->card_holder_name}}</td>
												<td>{{$card->card_credit_amount}}</td>
												<td>{{$card->card_expire_date}}</td>
												<td>
													<span class="badge badge-success">{{$card->card_status}}</span>
												</td>
												<td>
													<a href="" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="">
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
														{{$active_credit_cards->links()}}
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
										Inactive Credit Card
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
												<th>Holder Name</th>
												<th>Amount</th>
												<th>Expire</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($inactive_credit_cards as $card)
											<tr>
												<td>{{$card->id}}</td>
												<td>{{$card->user->name}}</td>
												<td>{{$card->card_holder_name}}</td>
												<td>{{$card->card_credit_amount}}</td>
												<td>{{$card->card_expire_date}}</td>
												<td>
													<span class="badge badge-warning">{{$card->card_status}}</span>
												</td>
												<td>
													<a href="" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="">
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
														{{$inactive_credit_cards->links()}}
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