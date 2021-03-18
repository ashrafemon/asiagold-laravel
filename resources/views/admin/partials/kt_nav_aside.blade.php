<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside -->
	<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
		<div class="kt-aside__brand-logo">
			<a href="{{route('admin.dashboard')}}">
				<img alt="Logo" src="{{asset('assets/images/AsiaGoldLogo.png')}}" width="59" height="40" />
			</a>
		</div>
	</div>

	<!-- end:: Aside -->

	<!-- begin:: Aside Menu -->
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu" class="kt-aside-menu  kt-aside-menu--dropdown " data-ktmenu-vertical="1" data-ktmenu-dropdown="1" data-ktmenu-scroll="0">
			<ul class="kt-menu__nav ">
				<li class="kt-menu__item  kt-menu__item--active" aria-haspopup="true">
					<a href="{{route('admin.dashboard')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-gear"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/dashboard.png"/>
						<span class="kt-menu__link-text">Dashboard</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('account.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-layers-1"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/accounting.png"/>
						<span class="kt-menu__link-text">Account Manager</span>
					</a>
				</li>
				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('notification.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-layers-1"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/bell.png"/>
						<span class="kt-menu__link-text">Notification Manager</span>
					</a>
				</li>
				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('conf.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-layers-1"></i> -->
						<img src="https://img.icons8.com/office/48/000000/automative-storage-system.png"/>
						<span class="kt-menu__link-text">Sytem Configure</span>
					</a>
				</li>

				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('template.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-graph"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/email.png"/>
						<span class="kt-menu__link-text">Email Template</span>
					</a>
				</li>
				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('member.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-drop"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/add-user-group-man-man.png"/>
						<span class="kt-menu__link-text">Member Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('deposit.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-analytics-2"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/deposit.png"/>
						<span class="kt-menu__link-text">Deposit Manage</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('withdraw.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-protected"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/withdrawal-limit.png"/>
						<span class="kt-menu__link-text">Withdraw Manage</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-protected"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/gold-bars.png"/>
						<span class="kt-menu__link-text">Gold Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('buy.gold.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/buy.png"/>
						<span class="kt-menu__link-text">Buy Gold Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('sell.gold.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/return-purchase.png"/>
						<span class="kt-menu__link-text">Sell Gold Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('ship.gold.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/cargo-ship.png"/>
						<span class="kt-menu__link-text">Gold Shipping Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('loan.gold.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/bank-building.png"/>
						<span class="kt-menu__link-text">Gold Loan Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('order.card.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/online-payment-with-a-credit-card.png"/>
						<span class="kt-menu__link-text">Card Order Manager</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('credit.card.manage.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/bank-cards.png"/>
						<span class="kt-menu__link-text">Credit Card Manager</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- end:: Aside Menu -->
</div>