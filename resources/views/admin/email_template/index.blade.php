@extends('layouts.admin')

@section('title', 'Email Templating')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Email Templating
					</h3>
				</div>
			</div>

			<div class="kt-portlet__body">

				<div class="accordion accordion-solid accordion-toggle-plus" id="accordionExample6">
					<div class="card">
						<div class="card-header" id="headingOne6">
							<div class="card-title" data-toggle="collapse" data-target="#collapseOne6" aria-expanded="true" aria-controls="collapseOne6">
								<i class="flaticon-pie-chart-1"></i> Welcome Email Template
							</div>
						</div>
						<div id="collapseOne6" class="collapse" aria-labelledby="headingOne6" data-parent="#accordionExample6">
							<form action="{{route('template.welcome.update', 1)}}" method="POST">
								@csrf()
								@method('PATCH')
								<div class="card-body">
								
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" class="form-control" name="welcome_title" value="{{$welcome_template->title}}">
									</div>
									<div class="form-group">
										<label for="">Subject</label>
										<input type="text" class="form-control" name="welcome_subject" value="{{$welcome_template->subject}}">
									</div>
									<div class="form-group">
										<label for="">Message</label>
										<textarea name="welcome_message" class="tox-target kt-tinymce-2">
                    						{{$welcome_template->message}}
                						</textarea>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingTwo6">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseTwo6" aria-expanded="false" aria-controls="collapseTwo6">
								<i class="flaticon2-notification"></i> Deposit Email Template
							</div>
						</div>
						<div id="collapseTwo6" class="collapse" aria-labelledby="headingTwo6" data-parent="#accordionExample6">
							<form action="{{route('template.deposit.update', 2)}}" method="POST">
								@csrf()
								@method('PATCH')
								<div class="card-body">
								
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" class="form-control" name="welcome_title" value="{{$deposit_template->title}}">
									</div>
									<div class="form-group">
										<label for="">Subject</label>
										<input type="text" class="form-control" name="welcome_subject" value="{{$deposit_template->subject}}">
									</div>
									<div class="form-group">
										<label for="">Message</label>
										<textarea name="welcome_message" class="tox-target kt-tinymce-2">
											{{$deposit_template->message}}
										</textarea>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingThree6">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseThree6" aria-expanded="false" aria-controls="collapseThree6">
								<i class="flaticon2-chart"></i> Withdraw Email Template
							</div>
						</div>
						<div id="collapseThree6" class="collapse" aria-labelledby="headingThree6" data-parent="#accordionExample6">
							<form action="{{route('template.withdraw.update', 3)}}" method="POST">
								@csrf()
								@method('PATCH')
								<div class="card-body">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" class="form-control" name="withdraw_title" value="{{$withdraw_template->title}}">
									</div>
									<div class="form-group">
										<label for="">Subject</label>
										<input type="text" class="form-control" name="withdraw_subject" value="{{$withdraw_template->subject}}">
									</div>
									<div class="form-group">
										<label for="">Message</label>
										<textarea name="withdraw_message" class="tox-target kt-tinymce-2">
											{{$withdraw_template->message}}
										</textarea>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFour6">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFour6" aria-expanded="false" aria-controls="collapseFour6">
								<i class="flaticon2-chart"></i> Buy Gold Email Template
							</div>
						</div>
						<div id="collapseFour6" class="collapse" aria-labelledby="headingFour6" data-parent="#accordionExample6">
							<form action="{{route('template.buy.update', 4)}}" method="POST">
								@csrf()
								@method('PATCH')
								<div class="card-body">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" class="form-control" name="buy_title" value="{{$buy_template->title}}">
									</div>
									<div class="form-group">
										<label for="">Subject</label>
										<input type="text" class="form-control" name="buy_subject" value="{{$buy_template->subject}}">
									</div>
									<div class="form-group">
										<label for="">Message</label>
										<textarea name="buy_message" class="tox-target kt-tinymce-2">
											{{$buy_template->message}}
										</textarea>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
					</div>
					<div class="card">
						<div class="card-header" id="headingFive6">
							<div class="card-title collapsed" data-toggle="collapse" data-target="#collapseFive6" aria-expanded="false" aria-controls="collapseFive6">
								<i class="flaticon2-chart"></i> Sell Gold Email Template
							</div>
						</div>
						<div id="collapseFive6" class="collapse" aria-labelledby="headingFive6" data-parent="#accordionExample6">
							<form action="{{route('template.sell.update', 5)}}" method="POST">
								@csrf()
								@method('PATCH')
								<div class="card-body">
									<div class="form-group">
										<label for="">Title</label>
										<input type="text" class="form-control" name="sell_title" value="{{$sell_template->title}}">
									</div>
									<div class="form-group">
										<label for="">Subject</label>
										<input type="text" class="form-control" name="sell_subject" value="{{$sell_template->subject}}">
									</div>
									<div class="form-group">
										<label for="">Message</label>
										<textarea name="sell_message" class="tox-target kt-tinymce-2">
											{{$sell_template->message}}
										</textarea>
									</div>
								</div>
								<div class="card-footer">
									<button type="submit" class="btn btn-primary">Update</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@push('script')
<script src="{{asset('assets/plugins/custom/tinymce/tinymce.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/crud/forms/editors/tinymce.js')}}" type="text/javascript"></script>
@endpush