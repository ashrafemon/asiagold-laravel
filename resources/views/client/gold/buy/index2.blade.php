@extends('layouts.client')

@section('title', 'Buy Gold')

@section('content')

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
				<h4>Successfully gold added to your cart!</h4>
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
                                @foreach($golds as $gold)
                                <tr>
                                    <td>
                                        <span id="GoldName{{$gold->id}}">{{$gold->gold_size}}</span> grams
                                    </td>
                                    <td id="GoldImage{{$gold->id}}">
                                        <img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50"
                                            height="50">
                                    </td>
                                    <td>
                                        <span id="GoldDescription{{$gold->id}}">{{$gold->gold_description}}</span>
                                    </td>
                                    <td width="200">
                                        <input id="GoldQuantity{{$gold->id}}" type="text"
                                            class="form-control text-center kt_touchspin_3" value="0"
                                            placeholder="Select time" onchange="quantityChange(this)">
                                    </td>
                                    <td>
                                        $ <span id="GoldUnitPrice{{$gold->id}}">{{$gold->gold_unit_price}}</span>
                                    </td>
                                    <td>
                                        $ <span id="GoldSubTotalPrice{{$gold->id}}">0.00</span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="thead-light">
                                <tr class="">
                                    <th colspan="4"></th>
                                    <th>TOTAL</th>
                                    <th>$ <span id="GoldTotalPrice">0</span></th>
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
                        <button id="BuyAddCartBtn" type="button" class="btn btn-gold">Add to Cart</button>
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
    function quantityChange(event) {
        var idAttribute = event.id;
        // Get Id
        var id = idAttribute.replace(/[^0-9\.]+/g, "");

        // Required Field
        var gold_size_field = document.getElementById('GoldName' + id);
        var gold_unit_price_field = document.getElementById('GoldUnitPrice' + id);
        var gold_quantity_field = event;
        var gold_sub_total_price_field = document.getElementById('GoldSubTotalPrice' + id);
        var gold_total_price_field = document.getElementById('GoldTotalPrice');

        // Required Field Value
        var gold_size_value = parseFloat(gold_size_field.innerText);
        var gold_unit_price_value = parseFloat(gold_unit_price_field.innerText);
        var gold_quantity_value = parseFloat(gold_quantity_field.value);
        var gold_sub_total_price_value = parseFloat(gold_sub_total_price_field.innerText);
        var gold_total_price_value = parseFloat(gold_total_price_field.innerText);

        // Total Price
        var gold_sub_total_price = gold_unit_price_value * gold_quantity_value;
        var gold_total_price = gold_total_price_value + gold_sub_total_price;

        // Set Total Price in Document
        gold_sub_total_price_field.innerText = gold_sub_total_price.toFixed(2);
        gold_total_price_field.innerText = gold_total_price.toFixed(2);
    }


    $('#BuyAddCartBtn').on('click', function () {
        const item_length = $("[id^='GoldQuantity']").length;
        for (var i = 0; i < item_length; i++) {

            var gold_sub_total_price = parseFloat($('#GoldSubTotalPrice' + i).text());

            if (gold_sub_total_price > 0) {
                $.ajaxSetup({
                    beforeSend: function (xhr, type) {
                        if (!type.crossDomain) {
                            xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr(
                                'content'));
                        }
                    },
                });
                var gold_size_field = document.getElementById('GoldName' + i);
                var gold_description_field = document.getElementById('GoldDescription' + i)
                var gold_unit_price_field = document.getElementById('GoldUnitPrice' + i);
                var gold_quantity_field = document.getElementById('GoldQuantity' + i);
                var gold_sub_total_price_field = document.getElementById('GoldSubTotalPrice' + i);

                $.ajax({
                    url: '{{route('gold.buy.add')}}',
                    method: 'POST',
                    data: {
                        gold_name: gold_size_field.innerText + ' gram',
                        gold_description: gold_description_field.innerText,
                        gold_quantity: gold_quantity_field.value,
                        gold_unit_price: gold_unit_price_field.innerText,
                        gold_sub_total_price: gold_sub_total_price_field.innerText
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
            }
        }
	})
	
	$('#successModalBtn').on('click', function(){
		window.location.href = "{{route('gold.buy.index')}}";
	})

</script>
@endpush
