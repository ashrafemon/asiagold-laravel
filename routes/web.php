<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('login');
});


Auth::routes();

Route::middleware('ckuser')->group(function(){

	/* Home Controller */
	Route::get('/home', 'HomeController@index')->name('home');
	Route::get('/total_gold', 'HomeController@total_golds')->name('total_gold');
	Route::get('/profit_losses', 'HomeController@profit_losses')->name('profit_losses');
	Route::get('/loan', 'HomeController@loan')->name('loan');
	Route::get('/notifications', 'HomeController@getNotifications')->name('notifications');
	Route::get('/notification/{id}', 'HomeController@showNotification')->name('notification');
	/* Home Controller */

	/* Profile Controller Routes Start */
	Route::get('/profile', 'Client\ProfileController@index')->name('profile.index');
	Route::patch('/profile/personal_info', 'Client\ProfileController@personalInfoUpdate')->name('profile.personal_info.update');
	Route::patch('/profile/billing_address', 'Client\ProfileController@billingAddressUpdate')->name('profile.billing_address.update');
	Route::patch('/profile/shipping_address', 'Client\ProfileController@shippingAddressUpdate')->name('profile.shipping_address.update');
	Route::patch('/profile/change_password', 'Client\ProfileController@changePasswordUpdate')->name('profile.change_password.update');
	Route::patch('/profile/change_email', 'Client\ProfileController@changeEmailUpdate')->name('profile.change_email.update');
	Route::patch('/profile/change_avatar', 'Client\ProfileController@changeAvatarUpdate')->name('profile.change_avatar.update');
	/* Profile Controller Routes End */


	/* Withdraw Routes Start */
	Route::get('/withdraw', 'Client\WithdrawController@index')->name('withdraw.index');
	Route::post('/withdraw', 'Client\WithdrawController@withdraw')->name('withdraw.add');
	/* Withdraw Routes End */


	/* Deposit Routes Start */
	Route::get('/deposit', 'Client\DepositController@index')->name('deposit.index');
	Route::post('/deposit/bank_wire', 'Client\DepositController@bank_wire_deposit')->name('deposit.bankwire');
	Route::post('/deposit/crypto_currency', 'Client\DepositController@crypto_currency_deposit')->name('deposit.cryptocurrency');
	Route::post('/deposit/cash', 'Client\DepositController@cash_deposit')->name('deposit.cash');
	/* Deposit Routes End */


	/* Gold Controller */
	Route::prefix('/gold')->group(function(){

		/* Buy Gold Routes Start */
		Route::get('/buy', 'Client\BuyGoldController@index')->name('gold.buy.index');
		Route::post('/buy/add_gold_cart', 'Client\BuyGoldController@add_gold_cart')->name('gold.buy.add');
		Route::get('/buy/show_gold_cart', 'Client\BuyGoldController@show_gold_cart')->name('gold.buy.show');
		Route::get('/buy/place_order', 'Client\BuyGoldController@place_order')->name('gold.buy.order');
		/* Buy Gold Routes End */


		/* Sell Gold Routes Start */
		Route::get('/sell', 'Client\SellGoldController@index')->name('gold.sell.index');
		Route::post('/sell/sell_gold_cart', 'Client\SellGoldController@sell_gold')->name('gold.sell.add');
		/* Sell Gold Routes End */


		/* Gold Vault Routes Start */
		Route::get('/vault', 'Client\GoldVaultController@index')->name('gold.vault.index');
		/* Gold Vault Routes End */

		/* Gold Shipping Routes Start */ 
		Route::get('/shipping', 'Client\GoldShippingController@index')->name('gold.ship.index');
		Route::post('/shipping/add', 'Client\GoldShippingController@gold_shipping')->name('gold.ship.add');
		/* Gold Shipping Routes End */ 


		/* Gold Loan Routes Start */
		Route::get('/loan', 'Client\GoldLoanController@index')->name('gold.loan.index');
		Route::get('/loan/add', 'Client\GoldLoanController@create')->name('gold.loan.create');
		Route::post('/loan', 'Client\GoldLoanController@store')->name('gold.loan.store');
		/* Gold Loan Routes End */
	});

	/* Cart Routes Start */
	Route::get('/cart', 'Client\CartController@index')->name('cart.index');
	Route::get('/cart/checkout', 'Client\CartController@checkout')->name('cart.checkout');
	Route::delete('/cart/{id}', 'Client\CartController@destroy')->name('cart.destroy');
	/* Cart Routes End */


	/* Credit Card Routes Start */
	Route::get('credit_card', 'Client\CreditCardController@index')->name('credit.index');
	Route::get('credit_card/apply', 'Client\CreditCardController@create')->name('credit.create');
	Route::post('credit_card', 'Client\CreditCardController@store')->name('credit.store');
	/* Credit Card Routes End */
	

	Route::get('/invoice', 'HomeController@invoice')->name('invoice');


});


/* Admin Panel System Start Here */

Route::prefix('admin')->middleware('ckadmin')->group(function(){

	/* Admin Dashboard Routes Start */
	Route::get('dashboard','Admin\AdminController@index')->name('admin.dashboard');
	/* Admin Dashboard Routes End */

	/* Account Manager Routes Start */
	Route::get('account_manager', 'Admin\AccountManageController@index')->name('account.manage.index');
	/* Account Manager Routes End */


	/* Admin System Configure Routes Start */
	Route::get('configure', 'Admin\SystemConfController@index')->name('conf.index');
	Route::patch('configure', 'Admin\SystemConfController@update')->name('conf.update');
	/* Admin System Configure Routes End */


	/* Admin Email Template Routes Start */	
	Route::get('template', 'Admin\TemplateController@index')->name('template.index');
	Route::patch('template/welcome_template', 'Admin\TemplateController@welcome_template_update')->name('template.welcome.update');
	Route::patch('template/deposit_template', 'Admin\TemplateController@deposit_template_update')->name('template.deposit.update');
	Route::patch('template/withdraw_template', 'Admin\TemplateController@withdraw_template_update')->name('template.withdraw.update');
	Route::patch('template/buy_template', 'Admin\TemplateController@buy_template_update')->name('template.buy.update');
	Route::patch('template/sell_template', 'Admin\TemplateController@sell_template_update')->name('template.sell.update');
	/* Admin Email Template Routes End */


	/* Admin Member Manager Routes Start */
	Route::get('member_manager', 'Admin\MemberController@index')->name('member.index');
	Route::get('member_manager/{id}', 'Admin\MemberController@show')->name('member.show');
	Route::get('member_manager/{id}/edit', 'Admin\MemberController@edit')->name('member.edit');
	Route::patch('member_manager/{id}', 'Admin\MemberController@update')->name('member.update');
	Route::delete('member_manager/{id}', 'Admin\MemberController@destroy')->name('member.destroy');
	/* Admin Member Manager Routes End */


	/* Deposite Manager Routes Start */
	Route::get('deposit_manager', 'Admin\DepositManageController@index')->name('deposit.manage.index');
	Route::get('deposit_manager/{id}', 'Admin\DepositManageController@edit')->name('deposit.manage.edit');
	Route::patch('deposit_manager/{id}', 'Admin\DepositManageController@update')->name('deposit.manage.update');
	Route::delete('deposit_manager/{id}', 'Admin\DepositManageController@destroy')->name('deposit.manage.destroy');
	/* Deposite Manager Routes End */


	/* Withdraw Manager Routes Start */
	Route::get('withdraw_manager', 'Admin\WithdrawManageController@index')->name('withdraw.manage.index');
	Route::get('withdraw_manager/{id}', 'Admin\WithdrawManageController@show')->name('withdraw.manage.show');
	Route::get('withdraw_manager/{id}/edit', 'Admin\WithdrawManageController@edit')->name('withdraw.manage.edit');
	Route::patch('withdraw_manager/{id}', 'Admin\WithdrawManageController@update')->name('withdraw.manage.update');
	Route::delete('withdraw_manager/{id}', 'Admin\WithdrawManageController@destroy')->name('withdraw.manage.destroy');
	/* Deposite Manager Routes End */


	/* Gold Manager Routes Start */
	Route::get('gold_manager', 'Admin\GoldManageController@index')->name('gold.manage.index');
	Route::get('gold_manager/create', 'Admin\GoldManageController@create')->name('gold.manage.create');
	Route::post('gold_manager', 'Admin\GoldManageController@store')->name('gold.manage.store');
	Route::get('gold_manager/{id}/edit', 'Admin\GoldManageController@edit')->name('gold.manage.edit');
	Route::patch('gold_manager/{id}', 'Admin\GoldManageController@update')->name('gold.manage.update');
	Route::delete('gold_manager/{id}', 'Admin\GoldManageController@destroy')->name('gold.manage.destroy');
	/* Gold Manager Routes End */


	/* Gold Buy Manager Routes Start */
	Route::get('buy_gold_manager', 'Admin\BuyGoldManageController@index')->name('buy.gold.manage.index');
	Route::get('buy_gold_manager/{id}/edit', 'Admin\BuyGoldManageController@edit')->name('buy.gold.manage.edit');
	Route::patch('buy_gold_manager/{id}', 'Admin\BuyGoldManageController@update')->name('buy.gold.manage.update');
	Route::delete('buy_gold_manager/{id}', 'Admin\BuyGoldManageController@destroy')->name('buy.gold.manage.destroy');
	/* Gold Buy Manager Routes End */  

	/* Gold Sell Manager Routes Start */
	Route::get('sell_gold_manager', 'Admin\SellGoldManageController@index')->name('sell.gold.manage.index');
	Route::get('sell_gold_manager/{id}/edit', 'Admin\SellGoldManageController@edit')->name('sell.gold.manage.edit');
	Route::patch('sell_gold_manager/{id}', 'Admin\SellGoldManageController@update')->name('sell.gold.manage.update');
	Route::delete('sell_gold_manager/{id}', 'Admin\SellGoldManageController@destroy')->name('sell.gold.manage.destroy');
	/* Gold Sell Manager Routes End */


	/* Gold Shipping Manager Routes Start */
	Route::get('gold_shipping_manager', 'Admin\GoldShippingManageController@index')->name('ship.gold.manage.index');
	Route::get('gold_shipping_manager/{id}', 'Admin\GoldShippingManageController@show')->name('ship.gold.manage.show'); 
	Route::get('gold_shipping_manager/{id}/edit', 'Admin\GoldShippingManageController@edit')->name('ship.gold.manage.edit');
	Route::patch('gold_shipping_manager/{id}', 'Admin\GoldShippingManageController@update')->name('ship.gold.manage.update');
	Route::delete('gold_shipping_manager/{id}', 'Admin\GoldShippingManageController@destroy')->name('ship.gold.manage.destroy');
	/* Gold Shipping Manager Routes End */ 


	/* Gold Loan Manager Routes Start */
	Route::get('gold_loan_manager', 'Admin\GoldLoanManageController@index')->name('loan.gold.manage.index');
	Route::get('gold_loan_manager/{id}', 'Admin\GoldLoanManageController@show')->name('loan.gold.manage.show');
	Route::get('gold_loan_manager/{id}/edit', 'Admin\GoldLoanManageController@edit')->name('loan.gold.manage.edit');
	Route::patch('gold_loan_manager/{id}', 'Admin\GoldLoanManageController@update')->name('loan.gold.manage.update');
	Route::delete('gold_loan_manager/{id}', 'Admin\GoldLoanManageController@destroy')->name('loan.gold.manage.destroy');
	/* Gold Loan Manager Routes End */	 


	/*Card Order Manager Routes Start */
	Route::get('card_order_manager', 'Admin\CardOrderManageController@index')->name('order.card.manage.index');
	Route::get('card_order_manager/{id}/edit', 'Admin\CardOrderManageController@edit')->name('order.card.manage.edit');
	Route::patch('card_order_manager/{id}', 'Admin\CardOrderManageController@update')->name('order.card.manage.update');
	Route::delete('card_order_manager/{id}', 'Admin\CardOrderManageController@destroy')->name('order.card.manage.destroy');
	/*Card Order Manager Routes End */

	/* Notitfication Manager Routes Start */
	Route::get('notification_manager', 'Admin\NotificationManageController@index')->name('notification.manage.index');
	Route::get('notification_manager/create', 'Admin\NotificationManageController@create')->name('notification.manage.create');
	Route::post('notification_manager', 'Admin\NotificationManageController@store')->name('notification.manage.store');
	Route::get('notification_manager/{id}/edit', 'Admin\NotificationManageController@edit')->name('notification.manage.edit');
	Route::patch('notification_manager/{id}', 'Admin\NotificationManageController@update')->name('notification.manage.update');
	Route::delete('notification_manager/{id}', 'Admin\NotificationManageController@destroy')->name('notification.manage.destroy');
	/* Notitfication Manager Routes End */

	/* Credit Card manager Routes Start */
	Route::get('credit_card_manager', 'Admin\CreditCardManageController@index')->name('credit.card.manage.index');
	Route::get('credit_card_manager/create', 'Admin\CreditCardManageController@create')->name('credit.card.manage.create');
	Route::post('credit_card_manager', 'Admin\CreditCardManageController@store')->name('credit.card.manage.store');
	/* Credit Card manager Routes End */
});

/* Admin Panel System End Here */
