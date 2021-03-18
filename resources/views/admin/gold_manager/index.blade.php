@extends('layouts.admin')

@section('title', 'Gold Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Manager
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">
				@if(Session::has('message'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<strong>{{Session::get('message')}}</strong>
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    	<span aria-hidden="true">&times;</span>
				  	</button>
				</div>
				@endif
				<div class="row">
					<div class="col-12">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h4 class="kt-portlet__head-title">
										All Gold
									</h4>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-actions">
										<a href="{{route('gold.manage.create')}}" class="btn btn-gold btn-sm">
											Create Gold
										</a>
									</div>
								</div>
							</div>
							<div class="kt-portle__body">
								<div class="table-responsive">
									<table class="table text-center">
										<thead>
											<tr class="thead-light">
												<th>ID</th>
												<th>Gold Name</th>
												<th>Gold Description</th>
												<th>Gold Unit Price</th>
												<th>Gold Amount</th>
												<th>Gold Image</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											@foreach($golds as $gold)
											<tr>
												<td>{{$gold->id}}</td>
												<td>{{$gold->gold_name}}</td>
												<td>{{$gold->gold_description}}</td>
												<td>${{$gold->gold_unit_price}}</td>
												<td>{{$gold->gold_amount}}</td>
												<td>
													<img src="{{asset('assets/images/'.$gold->gold_image)}}" alt="Gold Image" width="50" height="50">
												</td>
												<td>
													<a href="{{route('gold.manage.edit', $gold->id)}}" class="btn btn-warning btn-sm">Edit</a>
													<form action="{{route('gold.manage.destroy', $gold->id)}}" method="POST" class="d-inline">
														@csrf
														@method('DELETE')
														<button type="sumbit" class="btn btn-danger btn-sm">Delete</button>
													</form>
												</td>
											</tr>
											@endforeach
										</tbody>
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