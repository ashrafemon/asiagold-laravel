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
			<form class="kt-form">
				<div class="kt-portlet__body">
					<div class="form-group">
                        <label for="card_balance_type">Balance Type:</label>
                        <select class="form-control kt-selectpicker" id="card_balance_type">
                            <option>EUR</option>
                            <option>USD</option>
                        </select>
                    </div>
					<div class="form-group mb-0">
                        <label>Balance: <strong id="creditBalance">1</strong></label>
                        <div id="creditBalanceSlider"></div>
                    </div>
				</div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                    	<button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="reset" class="btn btn-gold">Submit</button>
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
	var creditBalanceSlider = document.querySelector('#creditBalanceSlider');
	var creditBalance = document.querySelector('#creditBalance');
	noUiSlider.create(creditBalanceSlider, {
	    start: 1,
	    behaviour: 'snap',
	    connect: [true, false],
	    step: 1,
	    range: {
	        'min': 1,
	        'max': 1000
	    }
	});

	creditBalanceSlider.noUiSlider.on('change', function(value){
	    creditBalance.innerText = parseInt(value)
	});

</script>

@endpush