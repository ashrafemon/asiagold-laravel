@extends('layouts.client')

@section('title', 'Gold Shipping')

@section('content')
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
				<h4>Successfully gold added to your shipping cart! Wait untill admin approval.</h4>
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
						Add Shipping Detail
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			{{-- <form class="kt-form" method="POST"> --}}
				<div class="kt-portlet__body">
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
									<th>UNIT PRICE</th>
									<th>SUBTOTAL</th>
								</tr>
							</thead>
							<tbody>
                                @foreach($my_golds as $gold)
								<tr>
									<td>
										{{$gold->gold_name}}
										<input type="hidden" id="gold_name{{$loop->index + 1}}" name="gold_name{{$loop->index + 1}}" value="{{$gold->gold_name}}">
									</td>
									<td>
										<img src="{{asset('assets/images/'.$gold->gold_image)}}" alt="Gold Bar" width="50" height="50">
										<input type="hidden" id="gold_image{{$loop->index + 1}}" name="gold_image{{$loop->index + 1}}" value="{{$gold->gold_image}}">
									</td>
									<td>
										{{$gold->gold_description}}
										<input type="hidden" id="gold_description{{$loop->index + 1}}" name="gold_description{{$loop->index + 1}}" value="{{$gold->gold_description}}">
									</td>
									<td width="200">
										<input type="text" id="gold_quantity{{$loop->index + 1}}" name="gold_quantity{{$loop->index + 1}}" class="form-control text-center kt_touchspin_3" value="0" onchange="quantityChange(this)">
										<input type="hidden" id="gold_max_quantity{{$loop->index + 1}}" name="gold_max_quantity{{$loop->index + 1}}" value="{{$gold->gold_quantity}}">
									</td>
									<td>
										$ <span id="usd_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="usd_price{{$gold->id}}" name="usd_price{{$loop->index + 1}}" value="0">
									</td>
									<td>
										€ <span id="eur_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="eur_price{{$loop->index + 1}}" name="eur_price{{$loop->index + 1}}" value="0">
									</td>
									<td>
										$ <span id="gold_unit_price_result{{$loop->index + 1}}">{{$gold->gold_unit_price}}</span>
										<input type="hidden" id="gold_unit_price{{$loop->index + 1}}" name="gold_unit_price{{$loop->index + 1}}" value="{{$gold->gold_unit_price}}">
									</td>
									<td>
										$ <span id="gold_sub_total_price_result{{$loop->index + 1}}">0</span>
										<input type="hidden" id="gold_sub_total_price{{$loop->index + 1}}" name="gold_sub_total_price{{$loop->index + 1}}" value="0">
									</td>
								</tr>
								
								@endforeach
							</tbody>
							<tfoot class="thead-light">
								<tr class="">
									<th colspan="6"></th>
									<th>TOTAL</th>
									<th>
										$ <span id="gold_total_price_result">0</span>
										<input type="hidden" id="gold_total_price" name="sell_gold_total_price" value="0">
									</th>
								</tr>
							</tfoot>
						</table>
					</div>

					<div id="alertSec"></div>
					
					<div class="row">
						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Person Name: *</label>
								<input type="text" class="form-control" id="shipping_person_name" placeholder="Enter Person Name">
							</div>
							<div class="form-group">
								<label>House#: *</label>
								<input type="text" class="form-control" id="shipping_house" placeholder="Enter House">
							</div>
							<div class="form-group">
								<label>City: *</label>
								<input type="text" class="form-control" id="shipping_city" placeholder="Enter City">
							</div>
							<div class="form-group">
								<label>Address: *</label>
								<input type="text" class="form-control" id="shipping_address" placeholder="Enter Address">
							</div>
						</div>

						<div class="col-lg-6 col-md-6 col-12">
							<div class="form-group">
								<label>Street: *</label>
								<input type="text" class="form-control" id="shipping_street" placeholder="Enter Street">
							</div>
							<div class="form-group">
								<label>WhatsApp Number: *</label>
								<input type="text" class="form-control" id="shipping_whatsapp_number" placeholder="Enter WhatsApp Number">
							</div>
							<div class="form-group">
								<label>Phone: *</label>
								<input type="text" class="form-control" id="shipping_phone_number" placeholder="Enter Phone">
							</div>
							<div class="form-group">
								<label>Shipping Cost: </label>
								<input type="text" class="form-control" id="shipping_cost" placeholder="Enter Shipping Cost" value="90" disabled>
							</div>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-secondary">Cancel</button>
						<button id="GoldShipBtn" type="button" class="btn btn-gold">Submit</button>
					</div>
				</div>
			{{-- </form> --}}

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection

@push('script')
<script type="text/javascript">
	const goldLength = $("[id^='gold_quantity']").length;

	for(let i = 1; i <= goldLength; i++){
		let max = $('#gold_max_quantity'+i).val();
		
		$('#gold_quantity'+i).TouchSpin({
			min: 0,
			max: max,
			buttondown_class: "btn btn-secondary",
			buttonup_class: "btn btn-secondary"
		});
	}

	function setTotal(){
        let goldTotalPrice = 0
        let goldTotalPriceInput = $('#gold_total_price');
        let goldTotalPriceSpan = $('#gold_total_price_result');

        for(let i= 1; i <= goldLength; i++){
            let value = parseFloat($('#gold_sub_total_price'+i).val());
            goldTotalPrice += value;
        }

        goldTotalPriceInput.val(parseFloat(goldTotalPrice));
		goldTotalPriceSpan.text(parseFloat(goldTotalPrice));
		
    }

	function quantityChange(event){
		let idAttribute = event.id;
        // Selected Block ID
        let id = idAttribute.replace(/[^0-9\.]+/g, "");

        let goldQuantityInputValue = parseFloat($('#gold_quantity'+id).val());
        let goldUnitPriceInputValue = parseFloat($('#gold_unit_price'+id).val());

        let goldSubTotalPriceInput = $('#gold_sub_total_price'+id);
        let goldSubTotalPriceSpan = $('#gold_sub_total_price_result'+id);

		let goldUSDPriceSpan = $('#usd_price_result'+id);
		let goldUSDPriceInput = $('#usd_price'+id);

		let goldEURPriceSpan = $('#eur_price_result'+id);
		let goldEURPriceInput = $('#eur_price'+id);

        let subTotal = parseFloat(goldQuantityInputValue * goldUnitPriceInputValue);

        goldSubTotalPriceInput.val(parseFloat(subTotal));
		goldSubTotalPriceSpan.text(parseFloat(subTotal));

		goldUSDPriceInput.val(parseFloat(subTotal));
		goldUSDPriceSpan.text(parseFloat(subTotal));

		goldEURPriceInput.val(parseFloat(subTotal * 0.91));
		goldEURPriceSpan.text(parseFloat(subTotal * 0.91));

		// console.log(goldSubTotalPriceInput)

        setTotal();
	}

	$('#GoldShipBtn').on('click', function(){
		for (let i = 1; i <= goldLength; i++) {

			let goldSubTotalPriceInputValue = parseFloat($('#gold_sub_total_price' + i).val());

			if (goldSubTotalPriceInputValue > 0) {
				$.ajaxSetup({
					beforeSend: function (xhr, type) {
						if (!type.crossDomain) {
							xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr(
								'content'));
						}
					},
				});

				let goldName = $('#gold_name'+i).val();
				let goldDescription = $('#gold_description'+i).val();
				let goldUnitPrice = $('#gold_unit_price'+i).val();
				let goldQuantity = $('#gold_quantity'+i).val();
				let goldSubTotalPrice = $('#gold_sub_total_price'+i).val();
				let shippingPersonName = $('#shipping_person_name').val();
				let shippingHouse = $('#shipping_house').val();
				let shippingCity = $('#shipping_city').val();
				let shippingAddress = $('#shipping_address').val();
				let shippingStreet = $('#shipping_street').val();
				let shippingWhatsAppNumber = $('#shipping_whatsapp_number').val();
				let shippingPhone = $('#shipping_phone_number').val();
				let shippingCost = $('#shipping_cost').val();

				if(shippingPersonName && shippingHouse && shippingCity && shippingAddress && shippingStreet && shippingWhatsAppNumber && shippingPhone && shippingCost != null){
					
					$.ajax({
						url: '{{route('gold.ship.add')}}',
						method: 'POST',
						data: {
							gold_name: goldName,
							gold_description: goldDescription,
							gold_quantity: goldQuantity,
							gold_unit_price: goldUnitPrice,
							gold_sub_total_price: goldSubTotalPrice,
							shipping_person_name: shippingPersonName,
							shipping_house: shippingHouse,
							shipping_city: shippingCity,
							shipping_address: shippingAddress,
							shipping_street: shippingStreet,
							shipping_whatsapp_number: shippingWhatsAppNumber,
							shipping_phone: shippingPhone,
							shipping_cost: shippingCost,
						},
						dataType: 'json',
						success: function (data) {
							console.log(data)
							$('#successModal').modal('show');
						},
						error: function (data) {
							console.log(data.responseText);
						}
					});
				}else{
					$('#alertSec').append(`
						<div class="alert alert-danger alert-dismissible fade show" role="alert">
							<strong>* fields are required. Please fill these field.....</strong>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					`)
				}
				
			}
		}
	});

	$('#successModalBtn').on('click', function(){
		window.location.href = "{{route('gold.ship.index')}}";
	})
</script>
@endpush

