$(document).ready(function(){

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
});