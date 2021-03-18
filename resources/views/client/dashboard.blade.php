@extends('layouts.client')

@section('title', 'Dashboard')

@section('content')

@if(Session::has('message'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>{{Session::get('message')}}</strong>
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
    	<span aria-hidden="true">&times;</span>
  	</button>
</div>
@endif

<div class="row mb-5">
	<div class="col-12">
		<h3 style="color: #7C0170">Dashboard</h3>
		<p class="custom-text-light">You are in main panel</p>
	</div>
</div>

<div class="row mb-2">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="row">
			<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
				<div class="card border-0 shadow-sm rounded-15">
					<div class="card-body" style="height: 150px">
						<h5 class="mb-4" style="color: #9a9ab5">DE89 3704 0044 0532 0130 00</h5>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<h2 class="kt-font-dark">2,560.50 <small><sup class="text-muted kt-font-bold">EUR</sup></small></h2>
							</div>
							<div class="text-right">
								<h5 class="kt-font-success mb-0">+40%</h5>
								<h6 class="mb-0">this week</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
				<div class="card border-0 shadow-sm rounded-15">
					<div class="card-body" style="height: 150px">
						<h5 class="mb-4" style="color: #9a9ab5">DE89 3704 0044 0532 0130 00</h5>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<h2 class="kt-font-dark">260.50 <small><sup class="text-muted kt-font-bold">EUR</sup></small></h2>
							</div>
							<div class="text-right">
								<h5 class="kt-font-danger mb-0">-15%</h5>
								<h6 class="mb-0">this week</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-4 col-12">
				<div class="card border-0 shadow-sm rounded-15">
					<div class="card-body" style="height: 150px">
						<h5 class="mb-4" style="color: #9a9ab5">DE89 3704 0044 0532 0130 00</h5>
						<div class="d-flex justify-content-between align-items-center">
							<div>
								<h2 class="kt-font-dark">12,560.50 <small><sup class="text-muted kt-font-bold">RON</sup></small></h2>
							</div>
							<div class="text-right">
								<h5 class="kt-font-success mb-0">+250%</h5>
								<h6 class="mb-0">this week</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row my-5">
	<div class="col-lg-12">
		<div class="card border-0 shadow-sm rounded-15">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<h5 class="kt-font-dark">Your cards</h5>
					</div>
					<div>
						<h5 class="badge badge-white shadow-sm">
							<img src="https://img.icons8.com/ios-filled/24/000000/switzerland-map.png"/>
							<span>6876 76** **** 0789</span>
						</h5>
					</div>
				</div>

				<div>
					<h4 class="kt-font-dark">Tomasz Kowalski</h4>
					<hr>
				</div>

				<div class="row">
					<div class="col-lg-7 col-md-7 col-12">
						<div class="table-responsive">
							<table class="table table-borderless">
								<tr>
									<th width="50%">Card:</th>
									<td width="50%">Debit</td>
								</tr>
								<tr>
									<th width="50%">Card Type:</th>
									<td width="50%">Debit, Master Card, PayPass</td>
								</tr>
								<tr>
									<th width="50%">Account</th>
									<td width="50%">
										<span>Savings Account</span> <br>
										<span>68 4434 5567 0000 7000 5462 6789</span>
									</td>
								</tr>
								<tr>
									<th width="50%">Card number:</th>
									<td width="50%">6876 67** **** 0789</td>
								</tr>
								<tr>
									<th width="50%">Expiry date:</th>
									<td width="50%">31.03.2020</td>
								</tr>
								<tr>
									<th width="50%">Status</th>
									<td width="50%"><span class="kt-font-success">Active</span></td>
								</tr>
								<tr>
									<th width="50%">Blocked</th>
									<td width="50%">743.00 PLN</td>
								</tr>
							</table>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-12">
						<div style="background: linear-gradient(321deg, rgba(222,23,235,1) 0%, rgba(115,40,245,1) 100%);" class="kt-portlet" id="cardSkeleton">
                            <div class="kt-portlet__body" id="cardContent">
                                <div class="d-flex justify-content-between">
                                    <h4>Bank Name</h4>
                                    <i class="fas fa-globe-asia fa-2x"></i>
                                </div>
                                <div>
                                    <img src="{{asset('assets/images/credit-card-chip.png')}}" width="60" height="60" alt="Card Chip">
                                </div>
                                <div>
                                    <h3 id="credit_id" class="mb-0">1234 5678 9012 3456</h3>
                                    <p style="letter-spacing: 2px" class="mb-0">1234</p>
                                    <h6 class="text-center">Expiry Date: <br> 07/22</h6>
                                    <div class="d-flex align-items-center">

                                        <h4 class="mr-3">Ashraf Emon</h4>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="card_type">
                                <i class="fab fa-cc-mastercard fa-4x"></i>
                            </div>
                        </div>
					</div>
				</div>
				<div class="d-flex justify-content-between align-items-center">
					<div>
						<button class="btn btn-outline-secondary btn-sm">More Details</button>
					</div>
					<div>
						<button class="btn btn-white btn-sm shadow-sm font-weight-bold rounded-15">WITHHOLD CARD</button>
						<button class="btn btn-danger btn-sm rounded-15">CHANGE PIN</button>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row mb-5">
	<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
		<div class="card border-0 shadow-sm rounded-15">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="kt-font-dark">History</h5>
					<div>
						<nav class="nav">
							<a href="#" class="nav-link px-2 kt-font-danger"><h5>Today</h5></a>
							<a href="#" class="nav-link px-2 kt-font-dark"><h5>Yesterday</h5></a>
						</nav>
					</div>
				</div>
				<div class="historyItemContainer">
					<div class="todayhistory py-3 px-2">
						<div class="his-item pb-2 mb-3">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>
									<h4 class="kt-font-dark">
										16,00 PLN
									</h4>
									<h6 class="custom-text-light">Caffe Lame - Starbucks</h6>
									<h6 class="custom-text-light"><i class="fas fa-map-marker-alt"></i> Aleja jana</h6>
								</div>
								<div>
									<h6 class="custom-text-light">12:45</h6>
								</div>
							</div>
						</div>
						<div class="his-item pb-2 mb-3">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>
									<h4 class="kt-font-dark">
										16,00 PLN
									</h4>
									<h6 class="custom-text-light">Caffe Lame - Starbucks</h6>
									<h6 class="custom-text-light"><i class="fas fa-map-marker-alt"></i> Aleja jana</h6>
								</div>
								<div>
									<h6 class="custom-text-light">12:45</h6>
								</div>
							</div>
						</div>
						<div class="his-item pb-2 mb-3">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>
									<h4 class="kt-font-dark">
										16,00 PLN
									</h4>
									<h6 class="custom-text-light">Caffe Lame - Starbucks</h6>
									<h6 class="custom-text-light"><i class="fas fa-map-marker-alt"></i> Aleja jana</h6>
								</div>
								<div>
									<h6 class="custom-text-light">12:45</h6>
								</div>
							</div>
						</div>
						<div class="his-item pb-2 mb-3">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>
									<h4 class="kt-font-dark">
										16,00 PLN
									</h4>
									<h6 class="custom-text-light">Caffe Lame - Starbucks</h6>
									<h6 class="custom-text-light"><i class="fas fa-map-marker-alt"></i> Aleja jana</h6>
								</div>
								<div>
									<h6 class="custom-text-light">12:45</h6>
								</div>
							</div>
						</div>
						<div class="his-item pb-2 mb-3">
							<div class="d-flex justify-content-between align-items-center">
								<div>
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>
									<h4 class="kt-font-dark">
										16,00 PLN
									</h4>
									<h6 class="custom-text-light">Caffe Lame - Starbucks</h6>
									<h6 class="custom-text-light"><i class="fas fa-map-marker-alt"></i> Aleja jana</h6>
								</div>
								<div>
									<h6 class="custom-text-light">12:45</h6>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center py-3">
					<button class="btn btn-white btn-sm rounded-15 shadow">VIEW MORE</button>
				</div>
			</div>
		</div>
	</div>
	
	<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
		<div class="card border-0 shadow-sm rounded-15">
			<div class="card-body">
				<div class="d-flex justify-content-between align-items-center mb-3">
					<h5 class="kt-font-dark">Charge</h5>
					<div>
						<nav class="nav">
							<a href="#" class="nav-link px-2 kt-font-danger"><h5>Week</h5></a>
							<a href="#" class="nav-link px-2 kt-font-dark"><h5>Month</h5></a>
						</nav>
					</div>
				</div>
				<div class="chargeItemContainer">
					<div class="monthCharge">
						<div class="itemCircle text-center">
							<div id="chargeCircleChart" style="height: 300px" ></div>
						</div>
						<div>
							<div class="row m-0">
								<div class="col-lg-6 col-md-6 col-12 mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="custom-text-light">38%</h5> 
										<h5 class="kt-font-dark">Food</h5>
									</div>
									<div class="progress">
									 	<div class="progress-bar" role="progressbar" style="width: 38%; background-color: #7C0170" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="custom-text-light">31%</h5> 
										<h5 class="kt-font-dark">House</h5>
									</div>
									<div class="progress">
									 	<div class="progress-bar" role="progressbar" style="width: 31%; background-color: #85D231" aria-valuenow="31" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12 mb-3">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="custom-text-light">21%</h5> 
										<h5 class="kt-font-dark">Car</h5>
									</div>
									<div class="progress">
									 	<div class="progress-bar" role="progressbar" style="width: 21%; background-color: #FF185F" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-12">
									<div class="d-flex justify-content-between align-items-center">
										<h5 class="custom-text-light">18%</h5> 
										<h5 class="kt-font-dark">House</h5>
									</div>
									<div class="progress">
									 	<div class="progress-bar" role="progressbar" style="width: 18%; background-color: #63B4BC" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100"></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-center py-3">
					<button class="btn btn-white btn-sm rounded-15 shadow">MORE DETAILS</button>
				</div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-12 mb-lg-0 mb-md-0 mb-3">
		<div class="card border-0 shadow-sm rounded-15">
			<div class="card-body">
				<h5 class="kt-font-dark mb-4">Message</h5>
				<div class="messageItemContainer py-3 px-2">
					<div class="kt-section mb-0 border-bottom">
						<div class="kt-section__content kt-section__content--solid">
							<div class="d-flex justify-content-between align-items-center">
								<div class="mr-3">
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>	
									<h5 class="kt-font-dark">Earn 50,000 bonus miles</h5>
									<p class="text-jusitfy mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil veritatis odit velit cupiditate debitis...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-section mb-0 border-bottom">
						<div class="kt-section__content kt-section__content--solid">
							<div class="d-flex justify-content-between align-items-center">
								<div class="mr-3">
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>	
									<h5 class="kt-font-dark">Earn 50,000 bonus miles</h5>
									<p class="text-jusitfy mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil veritatis odit velit cupiditate debitis...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-section mb-0 border-bottom">
						<div class="kt-section__content kt-section__content--solid">
							<div class="d-flex justify-content-between align-items-center">
								<div class="mr-3">
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>	
									<h5 class="kt-font-dark">Earn 50,000 bonus miles</h5>
									<p class="text-jusitfy mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil veritatis odit velit cupiditate debitis...</p>
								</div>
							</div>
						</div>
					</div>
					<div class="kt-section mb-0">
						<div class="kt-section__content kt-section__content--solid">
							<div class="d-flex justify-content-between align-items-center">
								<div class="mr-3">
									<img src="https://img.icons8.com/ios-filled/24/000000/mac-os.png"/>
								</div>
								<div>	
									<h5 class="kt-font-dark">Earn 50,000 bonus miles</h5>
									<p class="text-jusitfy mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur nihil veritatis odit velit cupiditate debitis...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="text-right py-3">
					<button class="btn btn-white btn-sm rounded-15 shadow">MORE DETAILS</button>
				</div>
			</div>
		</div>
	</div>	
</div>

<div class="row">	
	<div class="col-12">
		<div id="swift_box"></div>
	</div>
</div>


@endsection

@push('script')

<script type="text/javascript">

    $(document).ready(function(){
		new Morris.Donut({
			element: 'chargeCircleChart',
			data: [
				{label: "Food", value: 38},
			    {label: "House", value: 31},
			    {label: "Car", value: 21},
			    {label: "Bills", value: 18},
			],
			labelColor: '#7C0270',
			colors: [
			    '#85D231',
			    '#63B4BC',
			    '#FF185F',
			    '#9D4594'
			],
		});


		$("#swift_box").lc_swift_box({
				theme: 'light',
	          height: 60,
	          news_per_time: 1,
	          social_share: false,
	          expandable_news: true,
	          elapsed_time: true,
	          hide_elements: ['title'],
	          
	          autoplay: true,
	          animation_time: 18000,
	          slideshow_time: 0,
	          carousel: true,   
	             
	          src : [
	               {
	                   type: 'rss',
	                   url: 'https://www.google.com/alerts/feeds/04197679894483445282/14516068296965554394',
	                   author: '<span id="nb_author_1">Gold News</span>',
	                   link_target: '_blank'
				}
			]
		 });


    });

	$("#swift_box").lc_swift_box({
  			rss2json_token : "mm8aygoxchbmhrcjhjn9jtonbnyye69bis9pbxeo",
		    theme: 'light',     
            height: 200,
            max_news: 150,
            news_per_time: 6,
            theme: 'light',
            pause_on_hover: true,
            layout: 'horizontal',
            social_share: false,
            boxed_news: true,
            buttons_position: 'bottom',
            img_behavior: 'expand',
            exp_main_img_pos: 'hidden',
            autoplay: true,
            slide_all: true,
            slideshow_time: 7000,
            animation_time: 1200,
            read_more_btn: true,
            carousel: true,  
		             
		    src : [
               {
                   type: 'rss',
                   url: 'https://www.google.com/alerts/feeds/04197679894483445282/14516068296965554394',
                   author: '<span id="nb_author_1">Gold News</span>',
                   link_target: '_blank'
	  			}
		  	]
	});
</script>
@endpush