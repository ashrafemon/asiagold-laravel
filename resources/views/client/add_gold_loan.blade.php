@extends('layouts.client')

@section('title', 'Add Gold Loan')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Loan
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 offset-lg-4 offset-md-4">
							<div class="kt-portlet shadow">
								<div class="kt-portlet__body text-center">
									<h5>Apply For Gold Loan</h5>
									
									<div class="form-group mt-3">
                                        <h5 id="loanSliderField" class="text-danger mb-3">$0</h5>
										<div id="loanSlider"></div>
                                    </div>
                                    <div class="form-group">
										<h5>and repay it over</h5>
                                        <h5 id="monthSliderField" class="text-danger mb-3">1 month</h5>
                                        <div id="monthSlider"></div>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <tr class="bg-light">
                                                <td>
                                                    <h6>$160</h6>
                                                    <p class="mb-0">Monthly repayment</p>
                                                </td>
                                                <td>
                                                    <h6>$1800</h6>
                                                    <p class="mb-0">Completion fee</p>
                                                </td>
                                                <td>
                                                    <h6>$121000</h6>
                                                    <p class="mb-0">Total payable</p>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
								</div>
								<div class="kt-portlet__foot text-center">
									<button class="btn btn-gold">Apply Now</button>
								</div>
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


@push('script')
<script type="text/javascript">
	var loanSlider = document.querySelector('#loanSlider');
	var loanSliderField = document.querySelector('#loanSliderField');
	noUiSlider.create(loanSlider, {
	    start: 1,
	    behaviour: 'snap',
	    step: 1,
	    connect: [true, false],
	    range: {
	        'min': 1,
	        'max': 1000
	    }
	});

	loanSlider.noUiSlider.on('change', function(value){
	    loanSliderField.innerText = '$' + parseInt(value) 
	})

	var monthSlider = document.querySelector('#monthSlider');
	var monthSliderField = document.querySelector('#monthSliderField');
	noUiSlider.create(monthSlider, {
	    start: 1,
	    behaviour: 'snap',
	    connect: [true, false],
	    step: 1,
	    range: {
	        'min': 1,
	        'max': 12
	    }
	});

	monthSlider.noUiSlider.on('change', function(value){
	    monthSliderField.innerText = parseInt(value) + ' month';
	});
</script>

@endpush