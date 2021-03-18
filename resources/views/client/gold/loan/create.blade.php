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
			<form class="kt-form" method="POST" action="{{route('gold.loan.store')}}">
				@csrf
				<div class="kt-portlet__body">
					@if($my_gold_total_price == 0 )
					<div class="alert alert-danger" role="alert">
						<div class="alert-text">
							<h5>You haven't any gold! so you cann't get a loan</h5>
							<p>If you want to get a loan than you should buy a gold!!!</p>
						</div>
					</div>
					@else
					<div class="row">
						<div class="col-lg-4 col-md-4 col-12 offset-lg-4 offset-md-4">
							<div class="kt-portlet shadow">
								<div class="kt-portlet__body text-center">
									<h5>Apply For Gold Loan</h5>

									<div class="form-group mt-3">
                                        <h5 id="loanSliderField" class="text-danger mb-3">$0</h5>
										<div id="loanSlider"></div>
										<input type="hidden" id="loan_amount" name="loan_amount" value="0">
                                    </div>
                                    <div class="form-group">
										<h5>and repay it over</h5>
                                        <h5 id="monthSliderField" class="text-danger mb-3">0 month</h5>
                                        <div id="monthSlider"></div>
                                        <input type="hidden" id="loan_months" name="loan_months" value="0">
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-bordered text-center">
                                            <tr class="bg-light">
                                                <td>
                                                    <h6 id="monthlyRepaymentField">$0</h6>
                                                    <p class="mb-0">Monthly repayment</p>
                                                    <input type="hidden" id="monthly_repayment" name="monthly_repayment" value="0">
                                                </td>
                                                <td>
                                                    <h6 id="completionFeeField"><span>$</span>0</h6>
                                                    <p class="mb-0">Completion fee</p>
                                                    <input type="hidden" id="completion_fee" name="completion_fee" value="0">
                                                </td>
                                                <td>
                                                    <h6 id="totalPayableField">$0</h6>
                                                    <p class="mb-0">Total payable</p>
                                                    <input type="hidden" id="total_payable" name="total_payable" value="0">
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
					@endif
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

	var monthlyRepayment = 0;
	var totalPayable = 0;
	var loanValue = 0;
	var monthValue = 0;
	var interestRate = 1.2;
	var completionFee = 20;
	var maxLoanAmount = {{$max_loan_amount}};
	var minLoanAmount = {{$min_loan_amount}};

	var monthlyRepaymentField = document.querySelector('#monthlyRepaymentField');
	var monthlyRepaymentInput = document.querySelector('#monthly_repayment');

	var totalPayableField = document.querySelector('#totalPayableField');
	var totalPayableInput = document.querySelector('#total_payable');

	var completionFeeField = document.querySelector('#completionFeeField');
	var completionFeeInput = document.querySelector('#completion_fee');

	completionFeeField.innerText = '$' + (parseInt(completionFee)).toString();
	completionFeeInput.value = parseInt(completionFee);

	var monthSlider = document.querySelector('#monthSlider');
	var monthSliderField = document.querySelector('#monthSliderField');
	var monthSliderInput = document.querySelector('#loan_months')
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
	    monthSliderInput.value = parseInt(value);

	    loanValue = loanSliderInput.value;
	    monthValue = monthSliderInput.value;

	    monthlyRepayment = loanValue / monthValue;
	    totalPayable = loanValue * interestRate;

	    monthlyRepaymentField.innerText = '$' + monthlyRepayment.toFixed(2).toString();
	    monthlyRepaymentInput.value = monthlyRepayment.toFixed(2);

	    totalPayableField.innerText = '$' + totalPayable.toFixed(2).toString();
	    totalPayableInput.value = totalPayable.toFixed(2);
	});


	var loanSlider = document.querySelector('#loanSlider');
	var loanSliderField = document.querySelector('#loanSliderField');
	var loanSliderInput = document.querySelector('#loan_amount');

	

	noUiSlider.create(loanSlider, {
	    start: 1,
	    behaviour: 'snap',
	    step: 1,
	    connect: [true, false],
	    range: {
	        'min': minLoanAmount,
	        'max': maxLoanAmount
	    }
	});

	loanSlider.noUiSlider.on('change', function(value){
	    loanSliderField.innerText = '$' + parseFloat(value)
	    loanSliderInput.value = parseFloat(value); 

	    loanValue = loanSliderInput.value;
	    monthValue = monthSliderInput.value;

	    monthlyRepayment = loanValue / monthValue;
	    totalPayable = loanValue * interestRate;

	    monthlyRepaymentField.innerText = '$' + monthlyRepayment.toFixed(2).toString();
	    monthlyRepaymentInput.value = monthlyRepayment.toFixed(2);

	    totalPayableField.innerText = '$' + totalPayable.toFixed(2).toString();
	    totalPayableInput.value = totalPayable.toFixed(2);

	})

	


</script>

@endpush