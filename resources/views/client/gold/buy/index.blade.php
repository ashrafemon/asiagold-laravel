@extends('layouts.client')

@section('title', 'Buy Gold')

@section('content')

<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body text-center">
				<h4>Successfully gold added to your cart!</h4>
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
                        Buy Gold
                    </h3>
                </div>
            </div>

            <!--begin::Form-->
            <form class="kt-form">
                <div class="kt-portlet__body">
                    <!-- <div class="row">
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
                    </div> -->

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
                                        <span>{{$gold->gold_name}}</span>
                                        <input type="hidden" name="gold_name{{$gold->id}}" id="gold_name{{$gold->id}}" value="{{$gold->gold_name}}">
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/goldbar.png')}}" alt="Gold Bar" width="50"
                                            height="50">
                                        <input type="hidden" name="gold_image{{$gold->id}}" id="gold_image{{$gold->id}}" value="{{$gold->gold_image}}">
                                    </td>
                                    <td>
                                        <span>{{$gold->gold_description}}</span>
                                        <input type="hidden" name="gold_description{{$gold->id}}" id="gold_description{{$gold->id}}" value="{{$gold->gold_description}}">
                                    </td>
                                    <td width="200">
                                        <input id="gold_quantity{{$gold->id}}" type="text"
                                            class="form-control text-center kt_touchspin_3" name="gold_quantity{{$gold->id}}" value="0"
                                            onchange="quantityChange(this)">
                                    </td>
                                    <td>
                                        <span>$ {{$gold->gold_unit_price}}</span>
                                        <input type="hidden" name="gold_unit_price{{$gold->id}}" id="gold_unit_price{{$gold->id}}" value="{{$gold->gold_unit_price}}">
                                    </td>
                                    <td>
                                       $ <span id="gold_sub_total_result{{$gold->id}}">0.00</span>
                                       <input type="hidden" name="gold_sub_total_price{{$gold->id}}" id="gold_sub_total_price{{$gold->id}}" value="0">
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot class="thead-light">
                                <tr>
                                    <th colspan="4"></th>
                                    <th>TOTAL</th>
                                    <th>
                                        $ <span id="gold_total_result">0</span>
                                        <input type="hidden" name="gold_total_price" id="gold_total_price" value="0">
                                    </th>
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

    function setTotal(){
        let goldTotalPrice = 0
        let goldTotalPriceInput = $('#gold_total_price');
        let goldTotalPriceSpan = $('#gold_total_result');


        const goldItemsLength = $("[id^='gold_quantity']").length;

        for(let i= 1; i <= goldItemsLength; i++){
            let value = parseFloat($('#gold_sub_total_price'+i).val());
            goldTotalPrice += value;
        }

        goldTotalPriceInput.val(parseFloat(goldTotalPrice));
        goldTotalPriceSpan.text(goldTotalPrice.toString());
    }

    function quantityChange(event) {
        let idAttribute = event.id;
        // Selected Block ID
        let id = idAttribute.replace(/[^0-9\.]+/g, "");

        let goldQuantityInputValue = parseFloat($('#gold_quantity'+id).val());
        let goldUnitPriceInputValue = parseFloat($('#gold_unit_price'+id).val());

        let goldSubTotalPriceInput = $('#gold_sub_total_price'+id);
        let goldSubTotalPriceSpan = $('#gold_sub_total_result'+id);

        let goldSubTotal = parseFloat(goldQuantityInputValue * goldUnitPriceInputValue);
        
        goldSubTotalPriceInput.val(parseFloat(goldSubTotal));
        goldSubTotalPriceSpan.text(goldSubTotal.toString())

        setTotal();
    }

    setTotal();

    $('#BuyAddCartBtn').on('click', function () {
        const goldItemsLength = $("[id^='gold_quantity']").length;

        for (let i = 1; i <= goldItemsLength; i++) {

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

                $.ajax({
                    url: '{{route('gold.buy.add')}}',
                    method: 'POST',
                    data: {
                        gold_name: goldName,
                        gold_description: goldDescription,
                        gold_quantity: goldQuantity,
                        gold_unit_price: goldUnitPrice,
                        gold_sub_total_price: goldSubTotalPrice,
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
