@extends('layouts.client')

@section('title', 'Invoice')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Invoice
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="row mb-3">
						<div class="col-12">
							<button class="btn btn-gold btn-sm">Copy</button>
							<button class="btn btn-gold btn-sm">CSV</button>
							<button class="btn btn-gold btn-sm">Excel</button>
							<button class="btn btn-gold btn-sm">PDF</button>
							<button class="btn btn-gold btn-sm">Print</button>
						</div>
					</div>
					<div class="row mb-2">
						<div class="offset-lg-3 col-lg-3 col-md-4 col-6">
							<div class="input-group date">
								<div class="input-group-prepend">
									<span class="input-group-text">
										Start
									</span>
								</div>
								<input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar"></i>
									</span>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-4 col-6">
							<div class="input-group date">
								<div class="input-group-prepend">
									<span class="input-group-text">
										End
									</span>
								</div>
								<input type="text" class="form-control" readonly value="05/20/2017" id="kt_datepicker_3" />
								<div class="input-group-append">
									<span class="input-group-text">
										<i class="la la-calendar"></i>
									</span>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-4 col-12 mt-lg-0 mt-md-0 mt-3">
							<div class="form-group">
								<div class="kt-input-icon kt-input-icon--left">
									<input type="text" class="form-control" placeholder="Search..." id="generalSearch">
									<span class="kt-input-icon__icon kt-input-icon__icon--left">
										<span><i class="la la-search"></i></span>
									</span>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<div class="table-responsive">
								<table class="table text-center">
									<thead class="thead-light">
										<tr>
											<th>OPERATION ID</th>
											<th>DATE</th>
											<th>BALANCE TYPE</th>
											<th>OPERATION TYPE</th>
											<th>TOTAL AMOUNT</th>
											<th>STATUS</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<th scope="row">1550</th>
											<td>08/04/2019</td>
											<td>Euro</td>
											<td>NAN</td>
											<td>1,500</td>
											<td><span class="badge badge-danger">Pendig</span></td>
										</tr>
										<tr>
											<th scope="row">1550</th>
											<td>08/04/2019</td>
											<td>Euro</td>
											<td>NAN</td>
											<td>1,500</td>
											<td><span class="badge badge-danger">Pendig</span></td>
										</tr>
										<tr>
											<th scope="row">1550</th>
											<td>08/04/2019</td>
											<td>Euro</td>
											<td>NAN</td>
											<td>1,500</td>
											<td><span class="badge badge-success">Approve</span></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>
                </div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection