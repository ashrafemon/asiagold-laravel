@extends('layouts.client')

@section('title', 'Sell Gold')

@section('content')
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
				<!-- <h4 id="messageBox">Successfully gold added to your sell cart! Wait untill admin approval.</h4> -->
				<h4 id="messageBox"></h4>
				<br>
				<br>
				<button id="successModalBtn" type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

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
					@if(Session::has('cart_message'))
					<div class="alert alert-success alert-dismissible fade show" role="alert">
						<strong>{{Session::get('cart_message')}}</strong>
						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
					@endif
					<div class="row">
						<div class="col-lg-3 col-md-4 col-6">
							<div class="input-group">
								<div class="input-group-prepend">
									<span class="input-group-text">
										Show
									</span>
								</div>
								<select class="form-control kt-selectpicker">
									<option>10</option>
									<option>20</option>
									<option>30</option>
								</select>
								<div class="input-group-append">
									<span class="input-group-text">
										entries
									</span>
								</div>
							</div>
						</div>
						<div class="offset-lg-6 col-lg-3 col-md-4 col-6">
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

					<div class="table-responsive">
						<table class="table text-center">
							<thead class="thead-light">
								<tr>
									<th>PRODUCT</th>
									<th>IMAGE</th>
									<th>DESCRIPTION</th>
									<th>QUANTITY</th>
									<th>USD</th>
									<th>EUR</th>
									<th>BTC</th>
									<th>UNIT PRICE</th>
									<th>SUBTOTAL</th>
								</tr>
							</thead>
							<tbody>
								@foreach($my_golds as $gold)
								<tr>
									<td>
										{{$gold->gold_name}}
										<input type="hidden" id="sell_gold_name{{$loop->index + 1}}" name="sell_gold_name{{$loop->index + 1}}" value="{{$gold->gold_name}}">
									</td>
									<td>
										<img src="{{asset('assets/images/'.$gold->gold_image)}}" alt="Gold Bar" width="50" height="50">
										<input type="hidden" id="sell_gold_image{{$loop->index + 1}}" name="sell_gold_image{{$loop->index + 1}}" value="{{$gold->gold_image}}">
									</td>
									<td>
										{{$gold->gold_description}}
										<input type="hidden" id="sell_gold_description{{$loop->index + 1}}" name="sell_gold_description{{$loop->index + 1}}" value="{{$gold->gold_description}}">
									</td>
									<td width="200">
										<input type="text" id="sell_gold_quantity{{$loop->index + 1}}" name="sell_gold_quantity{{$loop->index + 1}}" class="form-control text-center kt_touchspin_3" value="0" onchange="quantityChange(this)">
										<input type="hidden" id="sell_gold_max_quantity{{$loop->index + 1}}" name="sell_gold_max_quantity{{$loop->index + 1}}" value="{{$gold->gold_quantity}}">
									</td>
									<td>
										<span id="sell_usd_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="sell_usd_price{{$gold->id}}" name="sell_usd_price{{$loop->index + 1}}" value="0">
									</td>
									<td>
										<span id="sell_eur_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="sell_eur_price{{$loop->index + 1}}" name="sell_eur_price{{$loop->index + 1}}" value="0">
									</td>
									<td>
										<span id="sell_btc_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="sell_btc_price{{$loop->index + 1}}" name="sell_btc_price{{$loop->index + 1}}" value="0">
									</td>
									<td>
										$ <span id="sell_gold_unit_price_result{{$loop->index + 1}}">{{$gold->gold_unit_price}}</span>
										<input type="hidden" id="sell_gold_unit_price{{$loop->index + 1}}" name="sell_gold_unit_price{{$loop->index + 1}}" value="{{$gold->gold_unit_price}}">
									</td>
									<td>
										$ <span id="sell_gold_sub_total_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="sell_gold_sub_total_price{{$loop->index + 1}}" name="sell_gold_sub_total_price{{$loop->index + 1}}" value="0">
									</td>
								</tr>
								
								@endforeach
							</tbody>
							@if($gold_total_price == 0)
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="9">No Data Found</th>
								</tr>
							</tfoot>
							@else
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="7"></th>
									<th>TOTAL</th>
									<th>
										$ <span id="sell_gold_total_price_result">0</span>
										<input type="hidden" id="sell_gold_total_price" name="sell_gold_total_price" value="0">
									</th>
								</tr>
							</tfoot>
							@endif
						</table>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions text-right">
                        <button id="SellAddCartBtn" type="button" class="btn btn-gold">Sell Gold</button>
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

	const sellGoldLength = $("[id^='sell_gold_quantity']").length;

	for(let i = 1; i <= sellGoldLength; i++){
		let max = $('#sell_gold_max_quantity'+i).val();
		
		$('#sell_gold_quantity'+i).TouchSpin({
			min: 0,
			max: max,
			buttondown_class: "btn btn-secondary",
  			buttonup_class: "btn btn-secondary"
		});
	}

	function setTotal(){
        let sellGoldTotalPrice = 0
        let sellGoldTotalPriceInput = $('#sell_gold_total_price');
        let sellGoldTotalPriceSpan = $('#sell_gold_total_price_result');

        for(let i= 1; i <= sellGoldLength; i++){
            let value = parseFloat($('#sell_gold_sub_total_price'+i).val());
            sellGoldTotalPrice += value;
        }

        sellGoldTotalPriceInput.val(parseFloat(sellGoldTotalPrice));
        sellGoldTotalPriceSpan.text(parseFloat(sellGoldTotalPrice));
    }

	function quantityChange(event){
		let idAttribute = event.id;
        // Selected Block ID
        let id = idAttribute.replace(/[^0-9\.]+/g, "");

        let sellGoldQuantityInputValue = parseFloat($('#sell_gold_quantity'+id).val());
        let sellGoldUnitPriceInputValue = parseFloat($('#sell_gold_unit_price'+id).val());

        let sellGoldSubTotalPriceInput = $('#sell_gold_sub_total_price'+id);
        let sellGoldSubTotalPriceSpan = $('#sell_gold_sub_total_price_result'+id);

        let sellSubTotal = parseFloat(sellGoldQuantityInputValue * sellGoldUnitPriceInputValue);

        sellGoldSubTotalPriceInput.val(parseFloat(sellSubTotal));
        sellGoldSubTotalPriceSpan.text(parseFloat(sellSubTotal));

        setTotal();
	}

	$('#SellAddCartBtn').on('click', function(){
		for (let i = 1; i <= sellGoldLength; i++) {

            let sellGoldSubTotalPriceInputValue = parseFloat($('#sell_gold_sub_total_price' + i).val());

            if (sellGoldSubTotalPriceInputValue > 0) {
                $.ajaxSetup({
                    beforeSend: function (xhr, type) {
                        if (!type.crossDomain) {
                            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr(
                                'content'));
                        }
                    },
                });

                let sellGoldName = $('#sell_gold_name'+i).val();
                let sellGoldDescription = $('#sell_gold_description'+i).val();
                let sellGoldUnitPrice = $('#sell_gold_unit_price'+i).val();
                let sellGoldQuantity = $('#sell_gold_quantity'+i).val();
                let sellGoldSubTotalPrice = $('#sell_gold_sub_total_price'+i).val();

                console.log(sellGoldName)
                console.log(sellGoldDescription)
                console.log(sellGoldUnitPrice)
                console.log(sellGoldQuantity)
                console.log(sellGoldSubTotalPrice)

                $.ajax({
                    url: '{{route('gold.sell.add')}}',
                    method: 'POST',
                    data: {
                        gold_name: sellGoldName,
                        gold_description: sellGoldDescription,
                        gold_quantity: sellGoldQuantity,
                        gold_unit_price: sellGoldUnitPrice,
                        gold_sub_total_price: sellGoldSubTotalPrice,
                    },
                    dataType: 'json',
                    success: function (data) {
						console.log(data)
						var successMsg = data.message;
						$('#messageBox').text(successMsg);
						$('#successModal').modal('show');
                    },
                    error: function (data) {
                    	console.log(data)
                    }
                });
            }
        }
	});

	$('#successModalBtn').on('click', function(){
		window.location.href = "{{route('gold.sell.index')}}";
	})


</script>
@endpush