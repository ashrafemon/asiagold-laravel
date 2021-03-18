@extends('layouts.admin')

@section('title', 'Edit Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Member Manager
					</h3>
				</div>
			</div>
			<form action="{{route('member.update', $member->id)}}" method="POST">
				@csrf
				@method('PATCH')
				<div class="kt-portlet__body">
					<div class="form-group">
						<label for="">Full Name</label>
						<input type="text" class="form-control" name="name" value="{{$member->name}}">
						<span class="text-danger">{{$errors->first('name')}}</span>
					</div>
					<div class="form-group">
						<label for="">User Name</label>
						<input type="text" class="form-control" name="username" value="{{$member->username}}">
						<span class="text-danger">{{$errors->first('username')}}</span>
					</div>
					<div class="form-group">
						<label for="">Phone</label>
						<input type="text" class="form-control" name="phone" value="{{$member->phone}}">
						<span class="text-danger">{{$errors->first('phone')}}</span>
					</div>
					<div class="form-group">
						<label for="">Country</label>
						<input type="text" class="form-control" name="country" value="{{$member->country}}">
						<span class="text-danger">{{$errors->first('country')}}</span>
					</div>
					<div class="form-group">
						<label for="">Status</label>
						<select name="status" class="form-control kt-selectpicker">
							@if($member->status == 'active')
							<option value="active" selected="true">Active</option>
							<option value="suspand">Suspand</option>
							@else
							<option value="active">Active</option>
							<option value="suspand" selected="true">Suspand</option>
							@endif
						</select>
					</div>
				</div>

				<div class="kt-portlet__foot">
					<button type="submit" class="btn btn-primary">Update Member</button>
				</div>
			</form>
			
		</div>
	</div>
</div>

@endsection