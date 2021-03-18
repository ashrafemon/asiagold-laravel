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

{{--
<div class="row">
	<div class="col-lg-4 col-md-4 col-6">

		<!--begin:: Widgets/Trends-->
		<div class="kt-portlet kt-iconbox kt-iconbox--animate">
			<div class="kt-portlet__body">
				<div class="kt-iconbox__body">
					<div class="kt-iconbox__icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect x="0" y="0" width="24" height="24"/>
						        <rect fill="#000000" opacity="0.3" x="11.5" y="2" width="2" height="4" rx="1"/>
						        <rect fill="#000000" opacity="0.3" x="11.5" y="16" width="2" height="5" rx="1"/>
						        <path d="M15.493,8.044 C15.2143319,7.68933156 14.8501689,7.40750104 14.4005,7.1985 C13.9508311,6.98949895 13.5170021,6.885 13.099,6.885 C12.8836656,6.885 12.6651678,6.90399981 12.4435,6.942 C12.2218322,6.98000019 12.0223342,7.05283279 11.845,7.1605 C11.6676658,7.2681672 11.5188339,7.40749914 11.3985,7.5785 C11.2781661,7.74950085 11.218,7.96799867 11.218,8.234 C11.218,8.46200114 11.2654995,8.65199924 11.3605,8.804 C11.4555005,8.95600076 11.5948324,9.08899943 11.7785,9.203 C11.9621676,9.31700057 12.1806654,9.42149952 12.434,9.5165 C12.6873346,9.61150047 12.9723317,9.70966616 13.289,9.811 C13.7450023,9.96300076 14.2199975,10.1308324 14.714,10.3145 C15.2080025,10.4981676 15.6576646,10.7419985 16.063,11.046 C16.4683354,11.3500015 16.8039987,11.7268311 17.07,12.1765 C17.3360013,12.6261689 17.469,13.1866633 17.469,13.858 C17.469,14.6306705 17.3265014,15.2988305 17.0415,15.8625 C16.7564986,16.4261695 16.3733357,16.8916648 15.892,17.259 C15.4106643,17.6263352 14.8596698,17.8986658 14.239,18.076 C13.6183302,18.2533342 12.97867,18.342 12.32,18.342 C11.3573285,18.342 10.4263378,18.1741683 9.527,17.8385 C8.62766217,17.5028317 7.88033631,17.0246698 7.285,16.404 L9.413,14.238 C9.74233498,14.6433354 10.176164,14.9821653 10.7145,15.2545 C11.252836,15.5268347 11.7879973,15.663 12.32,15.663 C12.5606679,15.663 12.7949989,15.6376669 13.023,15.587 C13.2510011,15.5363331 13.4504991,15.4540006 13.6215,15.34 C13.7925009,15.2259994 13.9286662,15.0740009 14.03,14.884 C14.1313338,14.693999 14.182,14.4660013 14.182,14.2 C14.182,13.9466654 14.1186673,13.7313342 13.992,13.554 C13.8653327,13.3766658 13.6848345,13.2151674 13.4505,13.0695 C13.2161655,12.9238326 12.9248351,12.7908339 12.5765,12.6705 C12.2281649,12.5501661 11.8323355,12.420334 11.389,12.281 C10.9583312,12.141666 10.5371687,11.9770009 10.1255,11.787 C9.71383127,11.596999 9.34650161,11.3531682 9.0235,11.0555 C8.70049838,10.7578318 8.44083431,10.3968355 8.2445,9.9725 C8.04816568,9.54816454 7.95,9.03200304 7.95,8.424 C7.95,7.67666293 8.10199848,7.03700266 8.406,6.505 C8.71000152,5.97299734 9.10899753,5.53600171 9.603,5.194 C10.0970025,4.85199829 10.6543302,4.60183412 11.275,4.4435 C11.8956698,4.28516587 12.5226635,4.206 13.156,4.206 C13.9160038,4.206 14.6918294,4.34533194 15.4835,4.624 C16.2751706,4.90266806 16.9686637,5.31433061 17.564,5.859 L15.493,8.044 Z" fill="#000000"/>
						    </g>
						</svg>
					</div>
					<div class="kt-iconbox__desc">
						<h3 class="kt-iconbox__title">
							USD
						</h3>
						<div class="kt-iconbox__content">
							{{$my_gold_total_price}}
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Trends-->
	</div>
	<div class="col-lg-4 col-md-4 col-6">

		<!--begin:: Widgets/Sales Stats-->
		<div class="kt-portlet kt-iconbox kt-iconbox--animate">
			<div class="kt-portlet__body">
				<div class="kt-iconbox__body">
					<div class="kt-iconbox__icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect x="0" y="0" width="24" height="24"/>
						        <path d="M4.3618034,10.2763932 L4.8618034,9.2763932 C4.94649941,9.10700119 5.11963097,9 5.30901699,9 L15.190983,9 C15.4671254,9 15.690983,9.22385763 15.690983,9.5 C15.690983,9.57762255 15.6729105,9.65417908 15.6381966,9.7236068 L15.1381966,10.7236068 C15.0535006,10.8929988 14.880369,11 14.690983,11 L4.80901699,11 C4.53287462,11 4.30901699,10.7761424 4.30901699,10.5 C4.30901699,10.4223775 4.32708954,10.3458209 4.3618034,10.2763932 Z M14.6381966,13.7236068 L14.1381966,14.7236068 C14.0535006,14.8929988 13.880369,15 13.690983,15 L4.80901699,15 C4.53287462,15 4.30901699,14.7761424 4.30901699,14.5 C4.30901699,14.4223775 4.32708954,14.3458209 4.3618034,14.2763932 L4.8618034,13.2763932 C4.94649941,13.1070012 5.11963097,13 5.30901699,13 L14.190983,13 C14.4671254,13 14.690983,13.2238576 14.690983,13.5 C14.690983,13.5776225 14.6729105,13.6541791 14.6381966,13.7236068 Z" fill="#000000" opacity="0.3"/>
						        <path d="M17.369,7.618 C16.976998,7.08599734 16.4660031,6.69750122 15.836,6.4525 C15.2059968,6.20749878 14.590003,6.085 13.988,6.085 C13.2179962,6.085 12.5180032,6.2249986 11.888,6.505 C11.2579969,6.7850014 10.7155023,7.16999755 10.2605,7.66 C9.80549773,8.15000245 9.45550123,8.72399671 9.2105,9.382 C8.96549878,10.0400033 8.843,10.7539961 8.843,11.524 C8.843,12.3360041 8.96199881,13.0779966 9.2,13.75 C9.43800119,14.4220034 9.7774978,14.9994976 10.2185,15.4825 C10.6595022,15.9655024 11.1879969,16.3399987 11.804,16.606 C12.4200031,16.8720013 13.1129962,17.005 13.883,17.005 C14.681004,17.005 15.3879969,16.8475016 16.004,16.5325 C16.6200031,16.2174984 17.1169981,15.8010026 17.495,15.283 L19.616,16.774 C18.9579967,17.6000041 18.1530048,18.2404977 17.201,18.6955 C16.2489952,19.1505023 15.1360064,19.378 13.862,19.378 C12.6999942,19.378 11.6325049,19.1855019 10.6595,18.8005 C9.68649514,18.4154981 8.8500035,17.8765035 8.15,17.1835 C7.4499965,16.4904965 6.90400196,15.6645048 6.512,14.7055 C6.11999804,13.7464952 5.924,12.6860058 5.924,11.524 C5.924,10.333994 6.13049794,9.25950479 6.5435,8.3005 C6.95650207,7.34149521 7.5234964,6.52600336 8.2445,5.854 C8.96550361,5.18199664 9.8159951,4.66400182 10.796,4.3 C11.7760049,3.93599818 12.8399943,3.754 13.988,3.754 C14.4640024,3.754 14.9609974,3.79949954 15.479,3.8905 C15.9970026,3.98150045 16.4939976,4.12149906 16.97,4.3105 C17.4460024,4.49950095 17.8939979,4.7339986 18.314,5.014 C18.7340021,5.2940014 19.0909985,5.62999804 19.385,6.022 L17.369,7.618 Z" fill="#000000"/>
						    </g>
						</svg>
					</div>
					<div class="kt-iconbox__desc">
						<h3 class="kt-iconbox__title">
							EUR
						</h3>
						<div class="kt-iconbox__content">
							{{$my_gold_total_price_euro}}
						</div>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Sales Stats-->
	</div>

	<div class="col-lg-4 col-md-4 col-6">

		<!--begin:: Widgets/Sales Stats-->
		<div class="kt-portlet kt-iconbox kt-iconbox--animate">
			<div class="kt-portlet__body">
				<div class="kt-iconbox__body">
					<div class="kt-iconbox__icon">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect x="0" y="0" width="24" height="24"/>
						        <circle fill="#000000" opacity="0.3" cx="12" cy="12" r="10"/>
						        <path d="M11,11 L11,7 C11,6.44771525 11.4477153,6 12,6 C12.5522847,6 13,6.44771525 13,7 L13,11 L17,11 C17.5522847,11 18,11.4477153 18,12 C18,12.5522847 17.5522847,13 17,13 L13,13 L13,17 C13,17.5522847 12.5522847,18 12,18 C11.4477153,18 11,17.5522847 11,17 L11,13 L7,13 C6.44771525,13 6,12.5522847 6,12 C6,11.4477153 6.44771525,11 7,11 L11,11 Z" fill="#000000"/>
						    </g>
						</svg>
					</div>
					<div class="kt-iconbox__desc">
						<br>
						<h3 class="kt-iconbox__title">
							Add Coin
						</h3>
					</div>
				</div>
			</div>
		</div>

		<!--end:: Widgets/Sales Stats-->
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5 class="mb-0">Come from Api</h5>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Recent Operation
                    </h3>
                </div>
            </div>
			<div class="kt-portlet__body">
				<div class="table-responsive">
					<table class="table text-center">
						<thead>
							<tr>
								<th>No</th>
								<th>Date</th>
								<th>Type</th>
								<th>Amount</th>
							</tr>
						</thead>
						<tbody>
							@foreach($recent_five as $recent)
								@foreach($recent as $r)
									<tr>
										<td>{{$loop->index}}</td>
										<td>{{$r->updated_at->format('d-m-Y')}}</td>
										<td>{{$r->getTable()}}</td>
										<td>{{$r->gold_sub_total_price}}</td>
									</tr>
								@endforeach
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-4 col-md-4 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5 class="text-center">Total Gold</h5>
				<div id="totalGoldChart" style="height:200px;"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5 class="text-center">Profit/Loss</h5>
				<div id="profitOrLossChart" style="height:200px;"></div>
			</div>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5 class="text-center">Latest Price</h5>
				<div id="latestPriceChart" style="height:200px;"></div>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-lg-4 col-md-4 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h6 class="text-muted">ALL WALETS</h6>
				<h1 class="mb-0">${{Auth::user()->wallet->amount}}</h1>
			</div>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<br>
				<div class="row mb-3">
					<div class="col-lg-4 col-md-4 col-6">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect x="0" y="0" width="24" height="24"/>
						        <circle fill="#000000" cx="12" cy="12" r="8"/>
						    </g>
						</svg>
						<span><strong>USD: ${{$my_gold_total_price}}</strong></span>
					</div>
					<div class="col-lg-4 col-md-4 col-6">
						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
						    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						        <rect x="0" y="0" width="24" height="24"/>
						        <circle fill="#000000" cx="12" cy="12" r="8"/>
						    </g>
						</svg>
						<span><strong>EURO: €{{$my_gold_total_price_euro}}</strong></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5 class="text-center">Gold Updates Price Chart</h5>
				<div id="goldPriceUpdateChart" style="height: 400px"></div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-lg-6 col-md-6 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
					    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <rect x="0" y="0" width="24" height="24"/>
					        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z" fill="#000000" opacity="0.3" transform="translate(11.500000, 12.000000) rotate(-345.000000) translate(-11.500000, -12.000000) "/>
					        <path d="M2,6 L21,6 C21.5522847,6 22,6.44771525 22,7 L22,17 C22,17.5522847 21.5522847,18 21,18 L2,18 C1.44771525,18 1,17.5522847 1,17 L1,7 C1,6.44771525 1.44771525,6 2,6 Z M11.5,16 C13.709139,16 15.5,14.209139 15.5,12 C15.5,9.790861 13.709139,8 11.5,8 C9.290861,8 7.5,9.790861 7.5,12 C7.5,14.209139 9.290861,16 11.5,16 Z M11.5,14 C12.6045695,14 13.5,13.1045695 13.5,12 C13.5,10.8954305 12.6045695,10 11.5,10 C10.3954305,10 9.5,10.8954305 9.5,12 C9.5,13.1045695 10.3954305,14 11.5,14 Z" fill="#000000"/>
					    </g>
					</svg>
					Loan Status
				</h5>
				<div id="loanStatusChartContent" class="mt-3">
					<h6 class="text-muted">Total Amount: $ <span id="goldLoanTotalPayable">0</span></h6>
					<h6 class="text-muted">Remains Months: <span id="goldLoanRemainsMonths">0</span></h6>
					<h6 class="text-muted">Monthly Repayment: $ <span id="goldLoanMonthlyRepayment">0</span></h6>
				</div>
				<div id="loanStatusChart" style="height: 200px" ></div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-6 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__body">
				<h5>
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
					    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					        <rect x="0" y="0" width="24" height="24"/>
					        <rect fill="#000000" opacity="0.3" x="2" y="5" width="20" height="14" rx="2"/>
					        <rect fill="#000000" x="2" y="8" width="20" height="3"/>
					        <rect fill="#000000" opacity="0.3" x="16" y="14" width="4" height="2" rx="1"/>
					    </g>
					</svg>
				 	Credit Card Status
				</h5>
				<div id="creditStatusChartContent" class="mt-3">
					<h6 class="text-muted">Total Amount: $5000</h6>
					<h6 class="text-muted">Remains Months: 7</h6>
					<h6 class="text-muted">Months Repayment: $400</h6>
				</div>
				<div id="creditStatusChart" style="height: 200px"></div>
			</div>
		</div>
	</div>
</div>
--}}

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

{{--
<div class="row mb-5">
	<div class="col-12">
		<div class="row">
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
			<div class="col-lg-2 col-md-2 col-12">
				<div class="card border-secondary shadow">
					<div class="card-body">
						<h6 class="kt-font-dark">Gold Price Forecast – Gold Markets Pulled Back Slightly After Rising</h6>
						<hr>
						<p><small><span class="badge badge-primary">Gold News</span> Gold market bulls are presently</small></p>
						<div class="d-flex justify-content-between align-items-center">
							<button class="btn btn-secondary btn-sm">Read more</button>
							<button class="btn"><h3>+</h3></button>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
--}}

<div class="row">	
	<div class="col-12">
		<div id="swift_box"></div>
	</div>
</div>


@endsection

@push('script')

<script type="text/javascript">

    $(document).ready(function(){

    	/* My Gold Total Amount Chart Data Start */ 
  //   	$.ajax({
		// 	url: '{{route('total_gold')}}',
		// 	method: 'GET',
		// 	dataType: 'json',
		// 	success: function(data) {
		// 		let my_golds = data.golds;
		// 		let golds = [];
		// 		for(var i = 0; i < my_golds.length; i++){
		// 			golds.push({
		// 				y: my_golds[i].gold_name,
		// 				a: my_golds[i].gold_quantity
		// 			});
		// 		}
		// 		totalGoldChart.setData(golds)
		// 	},
		// 	error: function(data){
		// 		console.log(data)
		// 	}
		// });

		// /* Total Gold Chart */
  //   	let totalGoldChart = new Morris.Bar({
		//   element: 'totalGoldChart',
		//   data: [],
		//   xkey: 'y',
		//   ykeys: ['a'],
		//   labels: ['Total'],
		//   barColors: [
		// 		'#b4cefb',
		// 	],
		// });

		// /* My Gold Total Amount Chart Data End */ 

		// /* Profit/Loss Amount Chart Data Start */ 

		// $.ajax({
		// 	url: '{{route('profit_losses')}}',
		// 	method: 'GET',
		// 	dataType: 'json',
		// 	success: function(data) {
		// 		let avarage = data.avarage;
		// 		let newPrice = 30;

		// 		let profit_losses = parseFloat(newPrice - avarage);
		// 		let profitLoss = []

		// 		if(profit_losses > 0){
		// 			profitLoss.push({
		// 				label: 'Profit', value: parseFloat(profit_losses).toFixed(2)
		// 				// label: 'Profit', value: profit_losses
		// 			});
		// 			profitLoss.push({
		// 				label: 'Loss', value: 0
		// 			});
		// 		}else if(profit_losses == 0){
		// 			profitLoss.push({
		// 				label: 'Profit', value: 0
		// 			});
		// 			profitLoss.push({
		// 				label: 'Loss', value: 0
		// 			});
		// 		}else{
		// 			profitLoss.push({
		// 				label: 'Profit', value: 0
		// 			});
		// 			profitLoss.push({
		// 				label: 'Loss', value: parseFloat(profit_losses).toFixed(2)
		// 			});
		// 		}

		// 		profitOrLossChart.setData(profitLoss);
		// 	},
		// 	error: function(data){
		// 		console.log(data)
		// 	}
		// });

		// /* Profit/Loss Amount Chart */

		// let profitOrLossChart = new Morris.Donut({
		// 	element: 'profitOrLossChart',
		// 	data: [
		// 		{Label: null, value: null},
		// 		{Label: null, value: null}
		// 	],
		// 	labelColor: 'crimson',
		// 	colors: [
		// 	    '#2c77f4',
		// 	    'crimson',
		// 	],
		// });

		// /* Profit/Loss Amount Chart Data End */ 

		// new Morris.Bar({
		// 	element: 'latestPriceChart',
		// 	data: [
		// 		{ y: 'Old Price', a: 5 },
		//     	{ y: 'New Price', a: 15}
		// 	],
		// 	xkey: 'y',
		// 	ykeys: ['a'],
		// 	labels: ['Total Gold'],
		// 	barColors: [
		// 		'#b4cefb',
		// 	],
			
		// });

		// /* Gold Loan Amount Chart Data Start */

		// $.ajax({
		// 	url: '{{route('loan')}}',
		// 	method: 'GET',
		// 	dataType: 'json',
		// 	success: function(data) {
		// 		let loan = data.loan;

		// 		let totalPayable = parseFloat(loan.total_payable);
		// 		let remainsLoan = parseFloat(loan.remains_loan);
		// 		let remainsMonth = parseInt(loan.loan_months);
		// 		let monthlyRepayment = parseFloat(loan.monthly_repayment);

		// 		$('#goldLoanTotalPayable').text(totalPayable.toFixed(2) ?? '0');
		// 		$('#goldLoanRemainsMonths').text(remainsMonth ?? '0');
		// 		$('#goldLoanMonthlyRepayment').text(monthlyRepayment.toFixed(2) ?? '0');

		// 		console.log(remainsLoan);
		// 		console.log(totalPayable);
		// 		console.log(remainsMonth);
		// 		console.log(monthlyRepayment);
				
		// 		let loanChartData = []; 

		// 		loanChartData.push({
		// 			label: 'Paid', value: parseFloat(totalPayable - remainsLoan).toFixed(2) ?? 0
		// 		});
		// 		loanChartData.push({
		// 			label: 'Remains', value: parseFloat(remainsLoan).toFixed(2) ?? 0
		// 		});

		// 		loanStatusChart.setData(loanChartData);
		// 	},
		// 	error: function(data){
		// 		console.log(data)
		// 	}
		// });

		// /* Gold Loan Status Chart */ 

		// let loanStatusChart = new Morris.Donut({
		// 	element: 'loanStatusChart',
		// 	data: [
		// 		{label: "Paid", value: 0},
		// 	    {label: "Remains", value: 0},
		// 	],
		// 	labelColor: 'crimson',
		// 	colors: [
		// 	    '#2c77f4',
		// 	    'crimson',
		// 	],
		// });

		// /* Gold Loan Amount Chart Data End */

		// new Morris.Donut({
		// 	element: 'creditStatusChart',
		// 	data: [
		// 		{label: "Paid", value: 2000},
		// 	    {label: "Remains", value: 4000},
		// 	], 
		// 	labelColor: 'crimson',
		// 	colors: [
		// 	    '#2c77f4',
		// 	    'crimson',
		// 	],
		// });

		// new Morris.Area({
		//   element: 'goldPriceUpdateChart',
		//   data: [
		//     { y: '2006', a: 20 },
		//     { y: '2007', a: 15 },
		//     { y: '2008', a: 25 },
		//     { y: '2009', a: 30 },
		//     { y: '2010', a: 35 },
		//     { y: '2011', a: 45 },
		//     { y: '2012', a: 40 },
		//     { y: '2013', a: 60 },
		//     { y: '2014', a: 80 },
		//   ],
		//   xkey: 'y',
		//   ykeys: ['a'],
		//   labels: ['New Price'],
		//   fillOpacity: 0.3,
		//   behaveLikeLine: true,
		//   resize: true,
		//   pointFillColors: ['#ffffff'],
		//   pointStrokeColors: ['#b4cefb'],
		//   lineColors: ['#2c77f4'],
		// });


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