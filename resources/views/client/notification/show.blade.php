@extends('layouts.client')

@section('title', 'Notification')

@section('content')
<div class="row">
	<div class="col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h4 class="kt-portlet__head-title">
						Notification
					</h4>
				</div>
			</div>
			<div class="kt-portlet__body">
				<h3 class="mb-5">{{$notification->notification_title}}</h3>
				<div>{!!$notification->notification_text!!}</div>
			</div>
		</div>
	</div>
</div>
@endsection
