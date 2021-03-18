@extends('layouts.admin')

@section('title', 'Credit Card Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Create Credit Card
					</h3>
				</div>
			</div>

			<form action="{{route('credit.card.manage.store')}}" method="POST" class="kt-form">
				@csrf
				<div class="kt-portlet__body">
					<div class="form-group">
						<label for="">User</label>
						<select name="user_id" class="form-control kt-selectpicker" id="user_id">
                        	<option disabled selected>Select User</option>
                            @foreach($users as $user)
							<option value="{{$user->id}}">{{$user->name}} ({{$user->email}})</option>
                            @endforeach
                        </select>
                        <span class="text-danger">{{$errors->first('user_id')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Holder Name</label>
						<input type="text" class="form-control" name="card_holder_name">
						<span class="text-danger">{{$errors->first('card_holder_name')}}</span>
					</div>
					<div class="form-group">
						<label for="">Bank Name</label>
						<input type="text" class="form-control" name="card_bank_name">
						<span class="text-danger">{{$errors->first('card_bank_name')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Number</label>
						<input type="text" class="form-control" name="card_number">
						<span class="text-danger">{{$errors->first('card_number')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card CVV</label>
						<input type="text" class="form-control" name="card_cvv">
						<span class="text-danger">{{$errors->first('card_cvv')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Expire Data</label>
						<input type="date" class="form-control" name="card_expire_date">
						<span class="text-danger">{{$errors->first('card_expire_date')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Credit Amount</label>
						<input type="text" class="form-control" name="card_credit_amount">
						<span class="text-danger">{{$errors->first('card_credit_amount')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Currency</label>
						<select name="card_currency" class="form-control kt-selectpicker" id="card_currency">
                        	<option disabled selected>Select Card Currency</option>
                        	<option value="usd">USD</option>
                           	<option value="euro">EUR</option>
                        </select>
                        <span class="text-danger">{{$errors->first('card_currency')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Username</label>
						<input type="text" class="form-control" name="card_username">
						<span class="text-danger">{{$errors->first('card_username')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Password</label>
						<input type="text" class="form-control" name="card_password">
						<span class="text-danger">{{$errors->first('card_password')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Link</label>
						<input type="text" class="form-control" name="card_link">
						<span class="text-danger">{{$errors->first('card_link')}}</span>
					</div>
					<div class="form-group">
						<label for="">Card Status</label>
						<select name="card_status" class="form-control kt-selectpicker" id="card_status">
                        	<option disabled selected>Select Card Status</option>
                        	<option value="active">Active</option>
                           	<option value="inactive">Inactive</option>
                        </select>
                        <span class="text-danger">{{$errors->first('card_status')}}</span>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<button type="submit" class="btn btn-gold">Create Credit Card</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection