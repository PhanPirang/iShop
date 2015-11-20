@extends('layout.master')

@section('title')
	Update Product
@stop

@section('page_styles')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css')}}"></script>
@section('content')
	<form role="form">
		<div class="form-body">
			<div class="form-group form-md-line-input">
				<div class="input-group">
					<input type="text" class="form-control" placeholder="Category Name">
					<label for="form_control_1">Category name</label>
					<span class="input-group-addon">
						<i class="fa fa-envelope"></i>
					</span>
				</div>
			</div>
			<div class="form-group form-md-line-input">
				<textarea class="form-control" rows="3" placeholder="Some Description..."></textarea>
				<label for="form_control_1">Description</label>
			</div>
			<div class="form-group form-md-line-input has-info">
				<select class="form-control" id="form_control_1">
					<option value=""></option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
					<option value="">Option 3</option>
					<option value="">Option 4</option>
				</select>
				<label for="form_control_1">Category</label>
			</div>
			<div class="form-group form-md-line-input has-info">
				<select class="form-control" id="form_control_1">
					<option value=""></option>
					<option value="">Option 1</option>
					<option value="">Option 2</option>
					<option value="">Option 3</option>
					<option value="">Option 4</option>
				</select>
				<label for="form_control_1">Promotion</label>
			</div>
			<div class="form-group last">
				<label class="control-label col-md-2">Thumbnail</label>
				<div class="col-md-10">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
							<img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="">
						</div>
						<div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;">
						</div>
						<div>
											<span class="btn default btn-file">
											<span class="fileinput-new">
											Select image </span>
											<span class="fileinput-exists">
											Change </span>
											<input type="file" name="...">
											</span>
							<a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput">
								Remove </a>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group">
				<label class="control-label col-md-2">Other Images</label>
				<div class="col-md-10">
					<div class="fileinput fileinput-new" data-provides="fileinput">
						<div class="input-group input-large">
							<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
								<i class="fa fa-file fileinput-exists"></i>&nbsp; <span class="fileinput-filename">
												</span>
							</div>
											<span class="input-group-addon btn default btn-file">
											<span class="fileinput-new">
											Select file </span>
											<span class="fileinput-exists">
											Change </span>
											<input type="file" name="...[]" multiple="">
											</span>
							<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput">
								Remove </a>
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-9">
						<button type="submit" class="btn purple"><i class="fa fa-check"></i> Submit</button>
						<button type="button" class="btn default"><span class="md-click-circle md-click-animate" style="height: 74px; width: 74px; top: -26px; left: 10.2969px;"></span>Cancel</button>
					</div>
				</div>
			</div>
		</div>
	</form>
@stop

@section('page_scripts')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js')}}"></script>
@stop





