@extends('layouts.admin')

@section('title', 'Set Notification')

@section('content')
<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<!--begin::Portlet-->
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Notification Manager
					</h3>
				</div>
			</div>

			<!--begin::Form-->
			<form class="kt-form" method="POST" action="{{route('notification.manage.store')}}">
				@csrf

				<div class="kt-portlet__body">
					<div class="form-group">
                        <label for="card_balance_type">User</label>
                        <select name="user_id" class="form-control kt-selectpicker" id="user_id">
                        	<option disabled selected>Select User</option>
                            @foreach($users as $user)
							<option value="{{$user->id}}">{{$user->name}} ({{$user->email}})</option>
                            @endforeach
                        </select>
                    </div>
					<div class="form-group">
						<label>Notification Title</label>
                        <input type="text" class="form-control" id="notification_title" name="notification_title">
					</div>

					<div class="form-group mb-0">
                        <label>Notification Text</label>
                        <textarea name="notification_text" id="notification_text" class="tox-target kt-tinymce-2" ></textarea>
                    </div>
				</div>
                <div class="kt-portlet__foot">
                    <div class="kt-form__actions">
                    	<button type="reset" class="btn btn-secondary">Cancel</button>
                        <button type="submit" class="btn btn-gold">Submit</button>
                    </div>
                </div>
			</form>

			<!--end::Form-->
		</div>
		<!--end::Portlet-->
	</div>
</div>

@endsection

@push('script')
<script src="{{asset('assets/plugins/custom/tinymce/tinymce.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('assets/js/pages/crud/forms/editors/tinymce.js')}}" type="text/javascript"></script>
@endpush
