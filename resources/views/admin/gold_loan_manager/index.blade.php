@extends('layouts.admin')

@section('title', 'Gold Loan Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Loan Manager
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
										Approved Gold Loan
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
												<th>Duration</th>
												<th>Monthly Payment</th>
												<th>Total Payable</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($approve_gold_loans as $gold_loan)
											<tr>
												<td>{{$gold_loan->id}}</td>
												<td>{{$gold_loan->user->name}}</td>
												<td>${{$gold_loan->loan_amount}}</td>
												<td>{{$gold_loan->loan_months}}</td>
												<td>${{$gold_loan->monthly_repayment}}</td>
												<td>${{$gold_loan->total_payable}}</td>
												<td><span class="badge badge-success">{{$gold_loan->gold_loan_status}}</span></td>
												<td>
													<a href="{{route('loan.gold.manage.show', $gold_loan->id)}}" class="btn btn-primary btn-sm">View</a>
													<form class="d-inline" method="POST" action="{{route('loan.gold.manage.destroy', $gold_loan->id)}}">
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
														{{$approve_gold_loans->links()}}
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
										Pending Gold Loan
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
												<th>Duration</th>
												<th>Monthly Payment</th>
												<th>Total Payable</th>
												<th>Status</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($pending_gold_loans as $gold_loan)
											<tr>
												<td>{{$gold_loan->id}}</td>
												<td>{{$gold_loan->user->name}}</td>
												<td>${{$gold_loan->loan_amount}}</td>
												<td>{{$gold_loan->loan_months}}</td>
												<td>${{$gold_loan->monthly_repayment}}</td>
												<td>${{$gold_loan->total_payable}}</td>
												<td><span class="badge badge-warning">{{$gold_loan->gold_loan_status}}</span></td>
												<td>
													<a href="{{route('loan.gold.manage.show', $gold_loan->id)}}" class="btn btn-primary btn-sm">View</a>
													<a href="{{route('loan.gold.manage.edit', $gold_loan->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form class="d-inline" method="POST" action="{{route('loan.gold.manage.destroy', $gold_loan->id)}}">
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
														{{$pending_gold_loans->links()}}
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