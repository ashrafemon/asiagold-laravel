@extends('layouts.client')

@section('title', 'Credit Card')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						My Card For Shopping
					</h3>
				</div>
				<div class="kt-portlet__head-toolbar">
					<div class="kt-portlet__head-actions">
						<a href="{{route('credit.create')}}" class="btn btn-gold btn-sm">
							Apply for Credit Card
						</a>
					</div>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
                    @if(count($cards) == 0)
                    <h4>No Data Found!</h4>
                    @else
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-12">
                                    <div class="kt-portlet" id="cardSkeleton">
                                        <div class="kt-portlet__body" id="cardContent">
                                            <div class="d-flex justify-content-between">
                                                <h4>Bank Name</h4>
                                                <i class="fas fa-globe-asia fa-2x"></i>
                                            </div>
                                            <div>
                                                <img src="{{asset('assets/images/credit-card-chip.png')}}" width="60" height="60" alt="Card Chip">
                                            </div>
                                            <div>
                                                <h3 id="credit_id" class="mb-0">1234 5678 9012 3456</h3>
                                                <p style="letter-spacing: 2px" class="mb-0">1234</p>
                                                <h6 class="text-center">Expiry Date: <br> 07/22</h6>
                                                <div class="d-flex align-items-center">

                                                    <h4 class="mr-3">Ashraf Emon</h4>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card_type">
                                            <i class="fab fa-cc-mastercard fa-4x"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-12 align-self-center mb-lg-0 mb-md-0 mb-3 text-center">
                                    <div>
                                        <h6>Credit Amount</h6>
                                        <h4>100,000,87$</h4>
                                    </div>
                                    <div class="mt-3">
                                        <h6>Currency</h6>
                                        <h4>100,7$</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <div class="kt-portlet">
                                        <div class="kt-portlet__body">
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <tr>
                                                        <th>Username</th>
                                                        <td>Ashraf</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Password</th>
                                                        <td>$hfjdfd$kdjhfkd</td>
                                                    </tr>
                                                    <tr>
                                                        <th>Link</th>
                                                        <td>http://www.mastercard.com/ashraf</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-12">
                            <div class="kt-portlet">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h5 class="kt-portlet__head-title">
                                            Second Card
                                        </h5>
                                    </div>
                                </div>
                                <div class="kt-portlet__body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <tr>
                                                <td>Bank Name:</td>
                                                <td><strong>City BANK</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Card Number</td>
                                                <td><strong>1234 5678 9012 3456</strong></td>
                                            </tr>
                                            <tr>
                                                <td>CVV</td>
                                                <td><strong>1234</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Expire</td>
                                                <td><strong>06/15</strong></td>
                                            </tr>
                                            <tr>
                                                <td>Card Holder</td>
                                                <td><strong>Ashraf Emon</strong></td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    @endif
					
				</div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection