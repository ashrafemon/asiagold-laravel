@extends('layouts.admin')

@section('title', 'System Configuration')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						System Configuration
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
										Assign System Configure Variable
									</h4>
								</div>
							</div>
							<form action="{{route('conf.update', 1)}}" class="kt-form" method="POST">
								@csrf
								@method('PATCH')
								<div class="kt-portlet__body">
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h4 class="kt-portlet__head-title">
													Login / Registration Config
												</h4>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="row">
												<div class="col-lg-6 col-md-6 col-12">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Password Length</span>
														</div>
														<input type="text" class="form-control" name="password_length" value="{{$system_var->password_length}}">
													</div>
												</div>
												<div class="col-lg-6 col-md-6 col-12">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Max Attempts</span>
														</div>
														<input type="text" class="form-control" name="max_attempts" value="{{$system_var->max_attempts}}">
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h4 class="kt-portlet__head-title">
													Rates Config
												</h4>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="row">
												<div class="col-lg-4 col-md-4 col-12">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Interest rate</span>
														</div>
														<input type="text" class="form-control" name="interest_rate" value="{{$system_var->interest_rate}}">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-12">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Commision rate</span>
														</div>
														<input type="text" class="form-control" name="commisions_rate" value="{{$system_var->commisions_rate}}">
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-12">
													<div class="input-group">
														<div class="input-group-prepend">
															<span class="input-group-text">Sales fee</span>
														</div>
														<input type="text" class="form-control" name="sales_fee" value="{{$system_var->sales_fee}}">
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__foot">
									<button type="submit" class="btn btn-primary">Assign</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection