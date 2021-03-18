@extends('layouts.client')

@section('title', 'Buy Gold')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Invoice 
						<small>Sample User Invoice Design</small>
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-6">
							<h1>Invoice</h1>
						</div>
						<div class="col-lg-6 col-md-6 col-6">
							<h3 class="text-right">Date: 04/04/2020</h1>
						</div>
					</div>
					<div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <p>
                                <span>From</span> <br>
                                <strong>Dandong</strong> <br>
                                <span>Lianning</span> <br><br>

                                <span>Phone: 86(804) 123-9876</span> <br>
                                <span>liu.com</span>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <p>
                                <span>To</span> <br>
                                <strong>John Doe</strong> <br>
                                <span>795 Folsom Ave, Suite 600</span> <br>
                                <span>San Francisco, CA 94107</span> <br>

                                <span>Phone: 86(804) 123-9876</span> <br>
                                <span>liu.com</span>
                            </p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <p>
                                <span>Invoice #007162</span> <br><br>
                                <strong>Order ID: 4F3S8J</strong> <br>
                                <strong>Payment Due: 2/22/2014</strong> <br>
                                <strong>Account: 968-34567</strong>
                            </p>
                        </div>
                    </div>

                    
					<div class="table-responsive">
						<table class="table text-center">
							<thead class="thead-light">
								<tr>
									<th>PRODUCT</th>
									<th>IMAGE</th>
									<th>DESCRIPTION</th>
									<th>QUANTITY</th>
									<th>UNIT PRICE</th>
									<th>SUBTOTAL</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>2.5 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>5 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>10 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>20 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>34.99 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>50 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>100 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>250 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>500 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
								<tr>
									<td>1000 gram</td>
									<td>
										<img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50" height="50">
									</td>
									<td>Purchase this gold bar</td>
									<td width="200">
										<input id="kt_touchspin_3" type="text" class="form-control text-center" value="0" name="demo1" placeholder="Select time">
									</td>
									<td>$6.00</td>
									<td>$65.00</td>
								</tr>
							</tbody>
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="4"></th>
									<th>TOTAL</th>
									<th>$600</th>
								</tr>
							</tfoot>
						</table>
					</div>
							
					<div class="row mt-3">
						<div class="col-lg-12 col-md-12 col-12">
							<div class="kt-portlet">
								<div class="kt-portlet__body">
									<h4>Payment Methods:</h4>
									<div>
										<a href="" class="btn btn-gold btn-sm">Bank Wire</a>
										<a href="" class="btn btn-gold btn-sm">Crypto Currency</a>
										<a href="" class="btn btn-gold btn-sm">Cash</a>
										<a href="" class="btn btn-gold btn-sm">Wallet Balance</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions text-right">
						<button type="reset" class="btn btn-gold">Proceed to Payment</button>
						<button type="reset" class="btn btn-outline-success">Print</button>
					</div>
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection