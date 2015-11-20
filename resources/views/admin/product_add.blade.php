@extends('layout.master')

@section('title')
	Add Product
@stop

@section('page_styles')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}"></script>
@stop

@section('content')
	<form role="form" method="POST" action="{{URL::To('product/add')}}" enctype="multipart/form-data">
		<div class="form-body">
			<div class="form-group form-md-line-input has-success form-md-floating-label">
				<div class="input-icon right">
					<input type="hidden" name="_token" value="{{csrf_token()}}">
					<input type="text" class="form-control" name="name">
					<label for="form_control_1">Product Title</label>
					<i class="icon-user"></i>
				</div>
			</div>
			<div class="form-group form-md-line-input form-md-floating-label">
				<textarea class="form-control" rows="3" name="description"></textarea>
				<label for="form_control_1">Description</label>
			</div>
			<div class="form-group form-md-line-input has-info">
				<select class="form-control" id="form_control_1" name="category">
					@foreach($category as $cat)
						<option value="{{$cat->id}}">{{$cat->name}}</option>
					@endforeach
				</select>
				<label for="form_control_1">Category</label>
			</div>
			<div class="form-group form-md-line-input has-info">
				<select class="form-control" id="form_control_1" name="promotion">
					@foreach($promotion as $promo)
						<option value="{{$promo->id}}">{{$promo->name}}</option>
					@endforeach
				</select>
				<label for="form_control_1">Promotion</label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="file" class="form-control" name="thumbnail">
				<label for="form_control_1">Thumbnail:</label>
			</div>
			<div class="form-group form-md-line-input">
				<input type="file" name="images[]" multiple class="form-control">
				<label for="form_control_1">Other Images:</label>
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-9">
						<button type="submit" class="btn blue"><i class="fa fa-check"></i> Submit</button>
					</div>
				</div>
			</div>
		</div>
	</form>
@stop

@section('page_scripts')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"></script>
@stop





