@extends('layouts.client')

@section('title', 'Fund Deposit')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Funds Deposit
					</h3>
				</div>
			</div>

			<form class="kt-form">
				<div class="kt-portlet__body">
					@if(Session::has('cart_message_failed'))
					<div class="alert alert-warning alert-dismissible fade show" role="alert">
						<strong>{{Session::get('cart_message_failed')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					<div id="alertSection"></div>

					<div class="form-group">
						<div class="row">
							<div class="col-lg-4 col-md-4 col-12">
								<label class="kt-option">
									<span class="kt-option__control">
										<span class="kt-radio kt-radio--bold kt-radio--brand">
											<input id="bankWireOption" type="radio" name="m_option_1" value="1">
											<span></span>
										</span>
									</span>
									<span class="kt-option__label">
										<span class="kt-option__head">
											<span class="kt-option__title">
												Bank Wire
											</span>
										</span>
									</span>
								</label>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<label class="kt-option">
									<span class="kt-option__control">
										<span class="kt-radio kt-radio--bold kt-radio--brand">
											<input id="cryptoCurrencyOption" type="radio" name="m_option_1" value="1">
											<span></span>
										</span>
									</span>
									<span class="kt-option__label">
										<span class="kt-option__head">
											<span class="kt-option__title">
												Crypto Currency
											</span>
										</span>
									</span>
								</label>
							</div>
							<div class="col-lg-4 col-md-4 col-12">
								<label class="kt-option">
									<span class="kt-option__control">
										<span class="kt-radio kt-radio--bold kt-radio--brand">
											<input id="depositCashOption" type="radio" name="m_option_1" value="1">
											<span></span>
										</span>
									</span>
									<span class="kt-option__label">
										<span class="kt-option__head">
											<span class="kt-option__title">
												Deposit Cash
											</span>
										</span>
									</span>
								</label>
							</div>
						</div>
					</div>

					<div id="bankWire">
						<div class="row">
							<div class="col-12">
								<div class="kt-portlet">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												Make A Transfer
											</h3>
										</div>
									</div>
									<form class="kt-form" id="BankWireForm" method="POST">
										<div class="kt-portlet__body">
											<div class="row mb-3">
												<div class="col-lg-4 col-md-4 col-12 arrow">
													<div class="text-center">
														<img src="{{asset('assets/images/fund/open_website.png')}}"
														alt="Open Website" height="100">
														<h6>Open Your Online Banking App/Website</h6>
													</div>
												</div>
												<div class="col-lg-4 col-md-4 col-12 arrow">
													<div class="text-center">
														<img src="{{asset('assets/images/fund/make_transfer.png')}}"
														alt="Open Website" height="100">
														<h6>Make A Transfer Using Bank Details Below</h6>
													</div>
													
												</div>
												<div class="col-lg-4 col-md-4 col-12">
													<div class="text-center">
														<img src="{{asset('assets/images/fund/file.png')}}"
														alt="Open Website" height="100">
														<h6>Save Payment Document If Possible And Notify Us About Your Transfer</h6>
													</div>
												</div>
											</div>
											

											<div class="table-responsive">
												<table class="table">
													<tr>
														<th width="50%">BANK NAME</th>
														<td width="50%">BCA</td>
													</tr>
													<tr>
														<th width="50%">ACCOUNT HOLDER NAME</th>
														<td width="50%">Yunita Devi</td>
														
													</tr>
													<tr>
														<th width="50%">ACCOUNT NUMBER</th>
														<td width="50%">2911308888</td>
													</tr>
													<tr>
														<th width="50%">BANK BRANCH</th>
														<td width="50%">Pondok Indah, Jakarta</td>
													</tr>
													<tr>
														<th width="50%">RECIPIENT REFERENCE</th>
														<td width="50%">
															<span>Deposite Account 123456</span>
															<div class="alert alert-danger mt-2" role="alert">
																<div class="alert-text">
																	<strong>Important</strong> <br>
																	<span>If the payment comment is different from the one displayed above, Your deposit Will not Be CREDITED to your Account</span>
																</div>
															</div>
														</td>
													</tr>
													<tr>
														<th width="50%">DEPOSIT AMOUNT</th>
														<td width="50%">
															<input type="text" class="form-control" id="bank_wire_amount">
														</td>
													</tr>
												</table>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__actions">
												<button type="button" id="BankWireFormBtn" class="btn btn-gold">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div id="cryptoCurrency">
						<div class="row">
							<div class="col-12">
								<div class="kt-portlet">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												Crypto Currency
											</h3>
										</div>
									</div>
									<form id="CryptoCurrencyForm" class="kt-form">
										<div class="kt-portlet__body">
											<div class="table-responsive">
												<table class="table">
													<tr>
														<th width="50%">CRYPTOCURRENCY ADDRESS</th>
														<td width="50%">Crypto Currency Account</td>
													</tr>
													<tr>
														<th width="50%">DEPOSIT AMOUNT</th>
														<td width="50%">
															<input type="text" class="form-control" id="crypto_currency_amount">
														</td>
													</tr>
												</table>
											</div>
										</div>
										<div class="kt-portlet__foot">
											<div class="kt-form__actions">
												<button id="CryptoCurrencyFormBtn" type="button" class="btn btn-gold">Submit</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<div id="depositCash">
						<div class="row">
							<div class="col-12">
								<div class="kt-portlet">
									<div class="kt-portlet__head">
										<div class="kt-portlet__head-label">
											<h3 class="kt-portlet__head-title">
												Deposit Cash
											</h3>
										</div>
									</div>
									<form id="CashForm" class="kt-form"></form>
									<div class="kt-portlet__body">
										<div class="table-responsive">
											<table class="table">
												<tr>
													<th width="50%">CASH OFFICE ADDRESS</th>
													<td width="50%">Cash Office 255</td>
												</tr>
												<tr>
													<th width="50%">DEPOSIT AMOUNT</th>
													<td width="50%">
														<input type="text" class="form-control" id="cash_amount">
													</td>
												</tr>
											</table>
										</div>
									</div>
									<div class="kt-portlet__foot">
										<div class="kt-form__actions">
											<button id="CashFormBtn" type="button" class="btn btn-gold">Submit</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
$("#bankWire").hide();
$("#cryptoCurrency").hide();
$("#depositCash").hide();

$("#cryptoCurrencyOption").on("click", function () {
    $("#bankWire").hide();
    $("#cryptoCurrency").show();
    $("#depositCash").hide();
});

$("#bankWireOption").on("click", function () {
    $("#bankWire").show();
    $("#cryptoCurrency").hide();
    $("#depositCash").hide();
});
$("#depositCashOption").on("click", function () {
    $("#bankWire").hide();
    $("#cryptoCurrency").hide();
    $("#depositCash").show();
});

$.ajaxSetup({
    beforeSend: function(xhr, type) {
        if (!type.crossDomain) {
            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
        }
    },
});

// Bank Wire Deposit Section 

$('#BankWireFormBtn').on('click', function(event){
	
	var bank_wire_amount = $('#bank_wire_amount').val();

	$.ajax({
		url: '{{route('deposit.bankwire')}}',
		method: 'POST',
		data: {bank_wire_amount},
		dataType: 'json',
		success: function(data) {
			localStorage.setItem('bank_wire', data.bank_wire);
			window.location.href = "{{route('deposit.index')}}";
		},
		error: function(data){
			console.log(data.responseText);
		}
	});
});

if(localStorage.getItem('bank_wire')){
	var successAlert = `<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong id="deposit-alert-text"></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>`
	$('#alertSection').append(successAlert);
	$('#deposit-alert-text').text(localStorage.getItem("bank_wire"));
}

$('.alert').on('closed.bs.alert', function(){
	localStorage.removeItem('bank_wire');
})

// Crypto Currency Deposit Section

$('#CryptoCurrencyFormBtn').on('click', function(event){
	
	var crypto_currency_amount = $('#crypto_currency_amount').val();

	$.ajax({
		url: '{{route('deposit.cryptocurrency')}}',
		method: 'POST',
		data: {crypto_currency_amount},
		dataType: 'json',
		success: function(data) {
			localStorage.setItem('crypto_currency', data.crypto_currency);
			window.location.href = "{{route('deposit.index')}}";
		},
		error: function(data){
			console.log(data.responseText);
		}
	});
});

if(localStorage.getItem('crypto_currency')){
	var successAlert = `<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong id="deposit-alert-text"></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>`
	$('#alertSection').append(successAlert);
	$('#deposit-alert-text').text(localStorage.getItem("crypto_currency"));
}

$('.alert').on('closed.bs.alert', function(){
	localStorage.removeItem('crypto_currency');
})


// Cash Deposit Section

$('#CashFormBtn').on('click', function(event){
	
	var cash_amount = $('#cash_amount').val();

	$.ajax({
		url: '{{route('deposit.cash')}}',
		method: 'POST',
		data: {cash_amount},
		dataType: 'json',
		success: function(data) {
			localStorage.setItem('cash', data.cash);
			window.location.href = "{{route('deposit.index')}}";
		},
		error: function(data){
			console.log(data.responseText);
		}
	});
});

if(localStorage.getItem('cash')){
	var successAlert = `<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong id="deposit-alert-text"></strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					    	<span aria-hidden="true">&times;</span>
					  	</button>
					</div>`
	$('#alertSection').append(successAlert);
	$('#deposit-alert-text').text(localStorage.getItem("cash"));
}

$('.alert').on('closed.bs.alert', function(){
	localStorage.removeItem('cash');
})


</script>
@endpush