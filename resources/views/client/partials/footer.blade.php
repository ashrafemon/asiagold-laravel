	<!-- begin::Global Config(global config for global JS sciprts) -->
	<script>
		var KTAppOptions = {
			"colors": {
				"state": {
					"brand": "#2c77f4",
					"light": "#ffffff",
					"dark": "#282a3c",
					"primary": "#5867dd",
					"success": "#34bfa3",
					"info": "#36a3f7",
					"warning": "#ffb822",
					"danger": "#fd3995"
				},
				"base": {
					"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
					"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
				}
			}
		};
	</script>

	<!-- end::Global Config -->

	<!--begin::Global Theme Bundle(used by all pages) -->
	<script src="{{asset('assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/scripts.bundle.js')}}" type="text/javascript"></script>
    <script src="{{asset('assets/js/swift-box.min.js')}}" type="text/javascript"></script>

	<!--end::Global Theme Bundle -->

	<!--begin::Page Vendors(used by this page) -->
	<!-- <script src="{{asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script> -->
	<!-- <script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script> -->
	<!-- <script src="{{asset('assets/plugins/custom/gmaps/gmaps.js')}}" type="text/javascript"></script> -->

	<!--end::Page Vendors -->

	<!--begin::Page Scripts(used by this page) -->
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-touchspin.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-select.js')}}" type="text/javascript"></script>
	<script src="{{asset('assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
    
    <script type="text/javascript">
        $.ajax({
            url: '{{route('gold.buy.show')}}',
            method: 'GET',
            dataType: 'json',
            success: function(data) {
                var carts_length = data.gold_carts.length;
                var cart_gold_sub_total_price = 0;

                for(var i = 0; i < carts_length; i++){
                    
                    $('.kt-mycart__body').append(`
                        <div class="kt-mycart__item">
                            <div class="kt-mycart__container">
                                <div class="kt-mycart__info">
                                    <a href="#" class="kt-mycart__title">
                                        ${data.gold_carts[i].gold_name} (Unit Price: $ ${data.gold_carts[i].gold_unit_price})
                                    </a>
                                    <span class="kt-mycart__desc">
                                        ${data.gold_carts[i].gold_description}
                                    </span>
                                    <div class="kt-mycart__action">
                                        <span class="kt-mycart__price">$ ${data.gold_carts[i].gold_sub_total_price}</span>
                                        <span class="kt-mycart__text">for</span>
                                        <span class="kt-mycart__quantity">${data.gold_carts[i].gold_quantity}</span>
                                    </div>
                                </div>
                                <a href="#" class="kt-mycart__pic">
                                    <img src="{{asset('assets/images/${data.gold_carts[i].gold_image}')}}" title="">
                                </a>
                            </div>
                        </div>
                    `);
                    cart_gold_sub_total_price += parseFloat(data.gold_carts[i].gold_sub_total_price);
                }

                $('#cart_sub_total_result').text('$ ' + cart_gold_sub_total_price.toFixed(2));
                $('#cart_sub_total').val(parseFloat(cart_gold_sub_total_price));
                
                $('#cart_total_result').text('$ '+ cart_gold_sub_total_price.toFixed(2));
                $('#cart_total').val(parseFloat(cart_gold_sub_total_price));
                $('#cartLength').text(carts_length + ' items');
            },
            error: function(data){
                console.log(data.responseText);
            }
        });

        $.ajax({
            url: '{{route('notifications')}}',
            method: 'GET', 
            dataType: 'json',
            success: function(data){
                let notifications = data.notifications;
                
                for(let i = 0; i < notifications.length; i++){
                    console.log(notifications[i].visibility)
                    if(notifications[i].visibility === 1){
                        $('#notificationSec').append(`
                            <a href="/notification/${notifications[i].id}" class="kt-notification__item">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-alert-2 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        ${notifications[i].notification_title}
                                    </div>
                                </div>
                            </a>
                        `);
                    }else{
                        if(notifications){
                            $('#notifyIcon').addClass('kt-font-danger');
                        }
                        $('#notificationSec').append(`
                            <a href="/notification/${notifications[i].id}" class="kt-notification__item bg-secondary">
                                <div class="kt-notification__item-icon">
                                    <i class="flaticon-alert-2 kt-font-success"></i>
                                </div>
                                <div class="kt-notification__item-details">
                                    <div class="kt-notification__item-title">
                                        ${notifications[i].notification_title}
                                    </div>
                                </div>
                            </a>
                        `);
                    }
                }
                $('#notificationLength').text(notifications.length + ' items');
            }
        });
    </script>
    
	@stack('script')

	<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->

	</html>