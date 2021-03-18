<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>
<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside">

	<!-- begin:: Aside -->
	<div class="kt-aside__brand kt-grid__item  " id="kt_aside_brand">
		<div class="kt-aside__brand-logo">
			<a href="{{route('home')}}">
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
					<a href="{{route('home')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-gear"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/dashboard.png"/>
						<span class="kt-menu__link-text">Dashboard</span>
					</a>
				</li>
				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('withdraw.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-layers-1"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/withdrawal-limit.png"/>
						<span class="kt-menu__link-text">Fund Withdraw</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('deposit.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-graph"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/deposit.png"/>
						<span class="kt-menu__link-text">Fund Deposit</span>
					</a>
				</li>
				
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.buy.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-drop"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/buy.png"/>
						<span class="kt-menu__link-text">Buy Gold</span>
					</a>
				</li>

				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.sell.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-analytics-2"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/return-purchase.png"/>
						<span class="kt-menu__link-text">Sell Gold</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.ship.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-protected"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/cargo-ship.png"/>
						<span class="kt-menu__link-text">Gold Shipping</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('credit.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/officel/48/000000/bank-cards.png"/>
						<span class="kt-menu__link-text">Credit Card</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('invoice')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/dusk/48/000000/positive-dynamic.png"/>
						<span class="kt-menu__link-text">Statement</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.loan.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/bank-building.png"/>
						<span class="kt-menu__link-text">Gold Loan</span>
					</a>
				</li>
				<li class="kt-menu__item " aria-haspopup="true">
					<a href="{{route('gold.vault.index')}}" class="kt-menu__link ">
						<!-- <i class="kt-menu__link-icon flaticon2-mail-1"></i> -->
						<img src="https://img.icons8.com/clouds/48/000000/safe.png"/>
						<span class="kt-menu__link-text">Gold Vault</span>
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- end:: Aside Menu -->
</div>