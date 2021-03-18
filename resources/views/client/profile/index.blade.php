@extends('layouts.client')

@section('title', 'Profile')

@section('content')

<div class="row mt-lg-0 mt-md-0 mt-5">
	<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
		<div class="row">
			<div class="col-12 mb-lg-0 mb-md-0 mb-3">
				<div class="kt-portlet">
					<div class="kt-portlet__body">
						<div class="text-center">
							<img src="{{Auth::user()->avatar ? asset(''.Auth::user()->avatar) : asset('assets/images/user.png')}}" width="150" height="150" class="rounded-circle shadow" alt="Profile Image">
						</div>
					</div>
				</div>
			</div>
			<div class="col-12">
				<div class="kt-portlet">
					<div class="kt-portlet__head">
						<div class="kt-portlet__head-label">
							<h3 class="kt-portlet__head-title">
								Account Summery
							</h3>
						</div>
					</div>
					
					<div class="kt-portlet__body">
						<div class="mb-3">
							<h6>Balance</h6>
							<hr>
							<h5>USD: 0</h5>
							<h5>EUR: 0</h5>
						</div>

						<div class="mb-3">
							<h6>Buy Gold</h6>
							<hr>
							<h5>Total: 0</h5>
						</div>

						<div class="mb-3">
							<h6>Sell Gold</h6>
							<hr>
							<h5>Total: 0</h5>
						</div>

						<div class="mb-3">
							<h6>Store Gold</h6>
							<hr>
							<h5>Total: 0</h5>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Profile Account
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-actions">
						<ul class="nav" id="profileTab" role="tablist">
							<li class="nav-item">
								<a href="#personalInfo" data-toggle="tab" role="tab" class="nav-link p-0 px-1 kt-font-dark active">Personal Info</a>
							</li>
							<li class="nav-item">
								<a href="#billingInfo" data-toggle="tab" role="tab" class="nav-link p-0 px-1 kt-font-dark">Billing Address</a>
							</li>
							<li class="nav-item">
								<a href="#shippingInfo" data-toggle="tab" role="tab" class="nav-link p-0 px-1 kt-font-dark">Shipping Address</a>
							</li>
							<li class="nav-item">
								<a href="#privacySetting" data-toggle="tab" role="tab" class="nav-link p-0 px-1 kt-font-dark">Privacy Setting</a>
							</li>
						</ul>
					</div>
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
	
				@if(Session::has('error_message'))
				<div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('error_message')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
				@endif

				<div class="tab-content">
					<div class="tab-pane fade show"  id="personalInfo" role="tabpanel">
						<form action="{{route('profile.personal_info.update')}}" method="POST">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<label for="">Full Name</label>
								<input type="text" class="form-control form-control-sm" name="name" value="{{Auth::user()->name}}">
								<span class="text-danger font-weight-bold">{{$errors->first('name')}}</span>
							</div>
							<div class="form-group">
								<label for="">User Name</label>
								<input type="text" class="form-control form-control-sm" name="username" value="{{Auth::user()->username}}">
								<span class="text-danger font-weight-bold">{{$errors->first('username')}}</span>
							</div>
							<div class="form-group">
								<label for="">Email Address</label>
								<input type="email" class="form-control form-control-sm" name="email" disabled value="{{Auth::user()->email}}">
							</div>
							<div class="form-group">
								<label for="">Phone Number</label>
								<input type="text" class="form-control form-control-sm" name="phone" value="{{Auth::user()->phone}}">
								<span class="text-danger font-weight-bold">{{$errors->first('phone')}}</span>
							</div>
							<div class="form-group">
								<label for="">Country</label>
								<input type="text" class="form-control form-control-sm" name="country" value="{{Auth::user()->country}}">
								<span class="text-danger font-weight-bold">{{$errors->first('country')}}</span>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="billingInfo" role="tabpanel">
						<form action="{{route('profile.billing_address.update')}}" method="POST">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<label>Person Name:</label>
								<input type="text" class="form-control form-control-sm" name="billing_person_name" placeholder="Enter Person Name" value="{{$billingaddress->billing_person_name}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_person_name')}}</span>
							</div>
							<div class="form-group">
								<label>House#:</label>
								<input type="text" class="form-control form-control-sm" name="billing_house" placeholder="Enter House" value="{{$billingaddress->billing_house}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_house')}}</span>
							</div>
							<div class="form-group">
								<label>City:</label>
								<input type="text" class="form-control form-control-sm" name="billing_city" placeholder="Enter City" value="{{$billingaddress->billing_city}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_city')}}</span>
							</div>
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control form-control-sm" name="billing_address" placeholder="Enter Address" value="{{$billingaddress->billing_address}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_address')}}</span>
							</div>
							<div class="form-group">
								<label>Street:</label>
								<input type="text" class="form-control form-control-sm" name="billing_street" placeholder="Enter Street" value="{{$billingaddress->billing_street}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_street')}}</span>
							</div>
							<div class="form-group">
								<label>Phone:</label>
								<input type="text" class="form-control form-control-sm" name="billing_phone" placeholder="Enter Phone" value="{{$billingaddress->billing_phone}}">
								<span class="text-danger font-weight-bold">{{$errors->first('billing_phone')}}</span>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
							</div>
						</form>
					</div>
					<div class="tab-pane fade" id="shippingInfo" role="tabpanel">
						<form action="{{route('profile.shipping_address.update')}}" method="POST">
							@csrf
							@method('PATCH')
							<div class="form-group">
								<label>Person Name:</label>
								<input type="text" class="form-control" name="shipping_person_name" placeholder="Enter Person Name" value="{{$shippingaddress->shipping_person_name}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_person_name')}}</span>
							</div>
							<div class="form-group">
								<label>House#:</label>
								<input type="text" class="form-control" name="shipping_house" placeholder="Enter House" value="{{$shippingaddress->shipping_house}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_house')}}</span>
							</div>
							<div class="form-group">
								<label>City:</label>
								<input type="text" class="form-control" name="shipping_city" placeholder="Enter City" value="{{$shippingaddress->shipping_city}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_city')}}</span>
							</div>
							<div class="form-group">
								<label>Address:</label>
								<input type="text" class="form-control" name="shipping_address" placeholder="Enter Address" value="{{$shippingaddress->shipping_address}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_address')}}</span>
							</div>
							<div class="form-group">
								<label>Street:</label>
								<input type="text" class="form-control" name="shipping_street" placeholder="Enter Street" value="{{$shippingaddress->shipping_street}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_street')}}</span>
							</div>
							<div class="form-group">
								<label>WhatsApp Number:</label>
								<input type="text" class="form-control" name="shipping_whatsapp_number" placeholder="Enter WhatsApp Number" value="{{$shippingaddress->shipping_whatsapp_number}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_whatsapp_number')}}</span>
							</div>
							<div class="form-group">
								<label>Phone:</label>
								<input type="text" class="form-control" name="shipping_phone" placeholder="Enter Phone" value="{{$shippingaddress->shipping_phone}}">
								<span class="text-danger font-weight-bold">{{$errors->first('shipping_phone')}}</span>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
							</div>
						</form>
					</div>
					
					<div class="tab-pane fade" id="privacySetting" role="tabpanel">
						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Change Avatar
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<form action="{{route('profile.change_avatar.update')}}" method="POST" enctype="multipart/form-data">
									@csrf
									@method('PATCH')
									<div class="form-group">
										<label for="">Change Picture</label>
										<input type="file" class="form-control form-control-sm" name="avatar">
										<span class="text-danger font-weight-bold">{{$errors->first('avatar')}}</span>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
									</div>
								</form>
							</div>
						</div>

						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Change Password
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<form action="{{route('profile.change_password.update')}}" method="POST">
									@csrf
									@method('PATCH')
									<div class="form-group">
										<label for="">Current Password</label>
										<input type="text" class="form-control form-control-sm" name="current_password">
										<span class="text-danger font-weight-bold">{{$errors->first('current_password')}}</span>
									</div>
									<div class="form-group">
										<label for="">New Password</label>
										<input type="text" class="form-control form-control-sm" name="new_password">
										<span class="text-danger font-weight-bold">{{$errors->first('new_password')}}</span>
									</div>
									<div class="form-group">
										<label for="">Confirm Password</label>
										<input type="text" class="form-control form-control-sm" name="password_confirmation">
										<span class="text-danger font-weight-bold">{{$errors->first('password_confirmation')}}</span>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
									</div>
								</form>
							</div>
						</div>

						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Change Email
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<form action="{{route('profile.change_email.update')}}" method="POST">
									@csrf
									@method('PATCH')
									<div class="form-group">
										<label for="">Current Email</label>
										<input type="text" class="form-control form-control-sm" name="current_email">
										<span class="text-danger font-weight-bold">{{$errors->first('current_email')}}</span>
									</div>
									<div class="form-group">
										<label for="">New Email</label>
										<input type="text" class="form-control form-control-sm" name="email">
										<span class="text-danger font-weight-bold">{{$errors->first('email')}}</span>
									</div>
									<div class="form-group">
										<label for="">Confirm Email</label>
										<input type="text" class="form-control form-control-sm" name="confirm_email">
										<span class="text-danger font-weight-bold">{{$errors->first('confirm_email')}}</span>
									</div>
									<div class="form-group">
										<button type="submit" class="btn btn-success btn-sm">Save Changes</button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
