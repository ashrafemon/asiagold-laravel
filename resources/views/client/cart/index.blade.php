@extends('layouts.client')

@section('title', 'My Cart')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						My Cart
					</h3>
				</div>
			</div>

            <div class="kt-portlet__body">
                @if(Session::has('cart_message_failed'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{Session::get('cart_message_failed')}}</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                @endif
    
                
                <ul class="nav mb-5" id="cartTab" role="tablist">
                    <li class="nav-item">
                        <a id="itemTab" href="#buyItemTab" class="nav-link active disabled" data-toggle="tab" role="tab" disabled>
                            <img src="https://img.icons8.com/dusk/24/000000/buy.png"/> MY CART CONTENT
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="billTab" href="#billingAddressTab" class="nav-link disabled" data-toggle="tab" role="tab">
                            <img src="https://img.icons8.com/bubbles/24/000000/bill.png"/> BILLING ADDRESS
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="shipTab" href="#shippingAddressTab" class="nav-link disabled" data-toggle="tab" role="tab">
                            <img src="https://img.icons8.com/cute-clipart/24/000000/truck.png"/> SHIPPING METHOD
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="payTab" href="#paymentMethodTab" class="nav-link disabled" data-toggle="tab" role="tab">
                            <img src="https://img.icons8.com/plasticine/24/000000/card-exchange.png"/> PAYMENT METHOD
                        </a>
                    </li>
                    <li class="nav-item">
                        <a id="orderTab" href="#confirmOrderTab" class="nav-link disabled" data-toggle="tab" role="tab">
                            <img src="https://img.icons8.com/cute-clipart/24/000000/check-file.png"/> CONFIRM ORDER
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="buyItemTab" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table text-center">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Action</th>
                                        <th>Name</th>
                                        <th>Image</th>
                                        <th>Description</th>
                                        <th>Quantity</th>
                                        <th>Unit Price</th>
                                        <th>Sub Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($gold_carts as $cart)
                                    <tr>
                                        <td>
                                            <form method="POST" action="{{route('cart.destroy', $cart->id)}}">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                        <td>{{$cart->gold_name}}</td>
                                        <td>
                                            <img src="{{asset('assets/images/'.$cart->gold_image)}}" alt="Gold Bar" width="50" height="50">
                                        </td>
                                        <td>{{$cart->gold_description}}</td>
                                        <td>{{$cart->gold_quantity}}</td>
                                        <td>${{$cart->gold_unit_price}}</td>
                                        <td>${{$cart->gold_sub_total_price}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot class="thead-light">
                                    @if($gold_cart_total == 0)
                                    <tr>
                                        <td colspan="7">
                                            <p>No Data Found</p>
                                        </td>
                                    </tr>
                                    @else
                                    <tr>
                                        <th colspan="5"></th>
                                        <th>Total</th>
                                        <th>$ {{$gold_cart_total}}</th>
                                    </tr>
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                        <div class="text-right">
                            <a id="nextBilling" href="#billingAddressTab" data-toggle="tab" role="tab" class="btn btn-primary ">Next Steps</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="billingAddressTab" role="tabpanel">
                        <div class="form-group">
                            <label>Person Name:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_person_name" placeholder="Enter Person Name" value="{{$billingaddress->billing_person_name}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_person_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label>House#:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_house" placeholder="Enter House" value="{{$billingaddress->billing_house}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_house')}}</span>
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_city" placeholder="Enter City" value="{{$billingaddress->billing_city}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_city')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_address" placeholder="Enter Address" value="{{$billingaddress->billing_address}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_address')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Street:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_street" placeholder="Enter Street" value="{{$billingaddress->billing_street}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_street')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" class="form-control form-control-sm" name="billing_phone" placeholder="Enter Phone" value="{{$billingaddress->billing_phone}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('billing_phone')}}</span>
                        </div>
                        <div class="text-right">
                            <a id="nextShipping" href="#shippingAddressTab" data-toggle="tab" role="tab" class="btn btn-primary ">Next Steps</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="shippingAddressTab" role="tabpanel">
                        <div class="form-group">
                            <label>Person Name:</label>
                            <input type="text" class="form-control" name="shipping_person_name" placeholder="Enter Person Name" value="{{$shippingaddress->shipping_person_name}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_person_name')}}</span>
                        </div>
                        <div class="form-group">
                            <label>House#:</label>
                            <input type="text" class="form-control" name="shipping_house" placeholder="Enter House" value="{{$shippingaddress->shipping_house}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_house')}}</span>
                        </div>
                        <div class="form-group">
                            <label>City:</label>
                            <input type="text" class="form-control" name="shipping_city" placeholder="Enter City" value="{{$shippingaddress->shipping_city}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_city')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input type="text" class="form-control" name="shipping_address" placeholder="Enter Address" value="{{$shippingaddress->shipping_address}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_address')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Street:</label>
                            <input type="text" class="form-control" name="shipping_street" placeholder="Enter Street" value="{{$shippingaddress->shipping_street}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_street')}}</span>
                        </div>
                        <div class="form-group">
                            <label>WhatsApp Number:</label>
                            <input type="text" class="form-control" name="shipping_whatsapp_number" placeholder="Enter WhatsApp Number" value="{{$shippingaddress->shipping_whatsapp_number}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_whatsapp_number')}}</span>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input type="text" class="form-control" name="shipping_phone" placeholder="Enter Phone" value="{{$shippingaddress->shipping_phone}}">
                            <span class="text-danger font-weight-bold">{{$errors->first('shipping_phone')}}</span>
                        </div>
                        <div class="text-right">
                            <a id="nextPayment" href="#paymentMethodTab" data-toggle="tab" role="tab" class="btn btn-primary ">Next Steps</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="paymentMethodTab" role="tabpanel">
                        <h2>PAYMENT METHOD</h2>
                        <div class="text-right">
                            <a id="nextOrder" href="#confirmOrderTab" data-toggle="tab" role="tab" class="btn btn-primary ">Next Steps</a>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="confirmOrderTab" role="tabpanel">
                        <div class="kt-form__actions">
                            <a href="{{route('cart.checkout')}}" class="btn btn-gold">Checkout</a>
                        </div>
                    </div>
                </div>       
            </div>
		</div>
	</div>
</div>
@endsection

@push('script')
<script type="text/javascript">
    $('#nextBilling').click(function(){
        $('#cartTab a').removeClass('active');
        $('#billTab').addClass('active');
    });

    $('#nextShipping').click(function(){
        $('#cartTab a').removeClass('active');
        $('#shipTab').addClass('active');
    });

    $('#nextPayment').click(function(){
        $('#cartTab a').removeClass('active');
        $('#payTab').addClass('active');
    });

    $('#nextOrder').click(function(){
        $('#cartTab a').removeClass('active');
        $('#orderTab').addClass('active');
    });
</script>
@endpush