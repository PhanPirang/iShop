@extends('layout.master')

@section('title')
	Category
@stop

@section('page_styles')
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}"/>
@stop

@section('content')
		<!-- BEGIN EXAMPLE TABLE PORTLET-->
	<div class="portlet box grey-cascade">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-globe"></i>Categories
			</div>
		</div>
		<div class="portlet-body">
			<div class="table-toolbar">
				<div class="row">
					<div class="col-md-6">
						<div class="btn-group">
							<button id="sample_editable_1_new" href="#add" data-toggle="modal" class="btn green">
								Add New <i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
					<div class="col-md-6">
						<div class="btn-group pull-right">
							<button class="btn dropdown-toggle" data-toggle="dropdown">Tools <i class="fa fa-angle-down"></i>
							</button>
							<ul class="dropdown-menu pull-right">
								<li>
									<a href="javascript:;">
										Print </a>
								</li>
								<li>
									<a href="javascript:;">
										Save as PDF </a>
								</li>
								<li>
									<a href="javascript:;">
										Export to Excel </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<table class="table table-striped table-bordered table-hover" id="sample_1">
				<thead>
				<tr>
					<th>
						No
					</th>
					<th>
						Username
					</th>
					<th>
						Description
					</th>
					<th>
						Action
					</th>
				</tr>
				</thead>
				<tbody>
				@foreach($result as $key => $cat)
				<tr class="odd gradeX">
					<td>
						{{$key+1}}
					</td>
					<td>
						{{$cat->name}}
					</td>
					<td>
						{{$cat->description}}
					</td>
					<td>
						<button class="btn btn-danger btn-xs btn_cat_delete">Delete</button>
						<button href="#update" class="btn btn-info btn-xs btn_cat_update" data-toggle="modal">Update</button>
						<input type="hidden" value="{{$cat->id}}">
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
			<div class="modal fade" id="add" tabindex="-1" role="add" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add New Category</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form role="form" action="{{URL::To('admin/category/add')}}" method="POST" id="form_sample_2" novalidate="novalidate">
										<div class="form-body">
											<div class="form-group form-md-line-input has-success form-md-floating-label">
												<div class="input-icon right">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="text" class="form-control" name="name">
													<label for="form_control_1">Category Name</label>
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="form-group form-md-line-input form-md-floating-label">
												<textarea class="form-control" rows="3" name="description"></textarea>
												<label for="form_control_1">Description</label>
											</div>
											<div class="form-group form-md-line-input form-md-floating-label">
												<button type="submit" class="btn blue">Save</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
			<div class="modal fade" id="update" tabindex="-1" role="update" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Modal Title</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form role="form" action="{{URL::To('admin/category/update')}}" method="POST">
										<div class="form-body">
											<div class="form-group form-md-line-input">
												<div class="input-group">
													<input type="hidden" id="id" name="id">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="text" class="form-control" placeholder="Category Name" name="name1" id="name1">
													<label for="form_control_1">Category name</label>
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
												</div>
											</div>
											<div class="form-group form-md-line-input">
												<textarea class="form-control" rows="3" placeholder="Some Description..." name="description1" id="description1"></textarea>
												<label for="form_control_1">Description</label>
											</div>
											<div class="form-group form-md-line-input form-md-floating-label">
												<button type="submit" class="btn blue">Save Changes</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- /.modal-content -->
				</div>
				<!-- /.modal-dialog -->
			</div>
		</div>
	</div>
	<!-- END EXAMPLE TABLE PORTLET-->
@stop

@section('page_scripts')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/admin/pages/scripts/form-validation.js')}}"></script>
@stop