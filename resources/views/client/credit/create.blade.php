@extends('layouts.client')

@section('title', 'Apply for Credit Card')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Apply for Credit Card
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form" method="POST" action="{{route('credit.store')}}">
				@csrf

				@if($my_gold_total_price == 0 )
				<div class="kt-portlet__body">
					<div class="alert alert-danger" role="alert">
						<div class="alert-text">
							<h5>You haven't any gold! so you cann't get a credit card</h5>
							<p>If you want to get a loan than you should buy a gold!!!</p>
						</div>
					</div>
				</div>
				@else
				<div class="kt-portlet__body">
					<div class="form-group">
                        <label for="card_balance_type">Balance Type:</label>
                        <select name="card_currency" class="form-control kt-selectpicker" id="card_currency">
                            <option value="usd">USD</option>
                            <option value="eur">EUR</option>
                        </select>
                    </div>
					<div class="form-group mb-0">
                        <label>Balance: <strong id="creditBalance">$ 0</strong></label>
                        <div id="creditBalanceSlider"></div>
                        <input type="hidden" name="card_amount" id="card_amount" value="0">
                    </div>
				</div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                    	<button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-gold">Submit</button>
                    </div>
                </div>
                @endif
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection

@push('script')
<script type="text/javascript">

	var maxLoanAmount = {{$max_loan_amount}};
	var minLoanAmount = {{$min_loan_amount}};

	var creditBalanceSlider = document.querySelector('#creditBalanceSlider');
	var creditBalance = document.querySelector('#creditBalance');
	var creditBalanceInput = document.querySelector('#card_amount');

	noUiSlider.create(creditBalanceSlider, {
	    start: 1,
	    behaviour: 'snap',
	    connect: [true, false],
	    step: 1,
	    range: {
	        'min': minLoanAmount,
	        'max': maxLoanAmount
	    }
	});

	creditBalanceSlider.noUiSlider.on('change', function(value){
	    creditBalance.innerText = '$ ' + parseFloat(value).toFixed(2).toString();
	    creditBalanceInput.value = parseFloat(value);
	});

</script>

@endpush