@extends('layouts.admin')

@section('title', 'Create Manager')

@section('content')

<div class="row">
	<div class="col-lg-12 col-md-12 col-12">
		<div class="kt-portlet">
			<div class="kt-portlet__head">
				<div class="kt-portlet__head-label">
					<h3 class="kt-portlet__head-title">
						Gold Manager
					</h3>
				</div>
			</div>
			<form action="{{route('gold.manage.store')}}" method="POST">
				@csrf
				<div class="kt-portlet__body">
					<div class="form-group">
						<label for="">Gold Name</label>
						<input type="text" class="form-control" name="gold_name" value="{{old('gold_name')}}">
						<span class="text-danger">{{$errors->first('gold_name')}}</span>
					</div>
					<div class="form-group">
						<label for="">Gold Size</label>
						<input type="text" class="form-control" name="gold_size" value="{{old('gold_size')}}">
						<span class="text-danger">{{$errors->first('gold_size')}}</span>
					</div>
					<div class="form-group">
						<label for="">Gold Description</label>
						<input type="text" class="form-control" name="gold_description" value="{{old('gold_description')}}">
						<span class="text-danger">{{$errors->first('gold_description')}}</span>
					</div>
					<div class="form-group">
						<label for="">Gold Unit Price</label>
						<input type="text" class="form-control" name="gold_unit_price" value="{{old('gold_unit_price')}}">
						<span class="text-danger">{{$errors->first('gold_unit_price')}}</span>
					</div>
					<div class="form-group">
						<label for="">Gold Amount <small>(How many gold do you have?)</small></label>
						<input type="text" class="form-control" name="gold_amount" value="{{old('gold_amount')}}">
						<span class="text-danger">{{$errors->first('gold_amount')}}</span>
					</div>
				</div>

				<div class="kt-portlet__foot">
					<button type="submit" class="btn btn-primary">Add Gold</button>
				</div>
			</form>
			
		</div>
	</div>
</div>

@endsection