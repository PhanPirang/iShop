@extends('layout.master')

@section('title')
	User
@stop

@section('page_styles')
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}" />
@stop

@section('content')
	<!-- BEGIN EXAMPLE TABLE PORTLET-->
	<div class="portlet box grey-cascade">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-globe"></i>Slides
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
						Caption
					</th>
					<th>
						Description
					</th>
					<th>
						Image
					</th>
					<th>
						Order
					</th>
					<th>
						Status
					</th>
					<th>
						Action
					</th>
				</tr>
				</thead>
				<tbody>
				@foreach($slides as $key => $slide)
					<tr class="odd gradeX">
						<td>
							{{$key+1}}
						</td>
						<td>
							{{$slide->caption}}
						</td>
						<td>
							{{$slide->description}}
						</td>
						<td>
							<img src="{{ asset('admin/assets/uploads/slides') . '/' . $slide->image_url }}" alt="" width="200">
						</td>
						<td>
							{{$slide->order}}
						</td>
						<td>
							{{($slide->status==1)?"Show":"Hide"}}
						</td>
						<td>
							<button class="btn btn-danger btn-xs btn_slide_delete">Delete</button>
							<button href="#update" class="btn btn-info btn-xs btn_slide_update" data-toggle="modal">Update</button>
							<input type="hidden" value="{{$slide->id}}">
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
							<h4 class="modal-title">Add New Slide</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form role="form" action="{{URL::To('slide/add')}}" method="POST" id="form_sample_2" enctype="multipart/form-data" novalidate="novalidate">
										<div class="form-body">
											<div class="form-group form-md-line-input has-success form-md-floating-label">
												<div class="input-icon right">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="text" class="form-control" name="caption">
													<label for="form_control_1">Slide Caption</label>
													<i class="icon-user"></i>
												</div>
											</div>
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" id="form_control_1" name="status">
													<option value="1">Show</option>
													<option value="0">Hide</option>
												</select>
												<label for="form_control_1">Status</label>
											</div>
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" id="form_control_1" name="order">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<label for="form_control_1">Order</label>
											</div>
											<div class="form-group form-md-line-input form-md-floating-label">
												<textarea class="form-control" rows="3" name="description"></textarea>
												<label for="form_control_1">Description</label>
											</div>
											<div class="form-group form-md-line-input">
												<input type="file" class="form-control" name="image">
												<label for="form_control_1">Image:</label>
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
							<h4 class="modal-title">Update</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form role="form" action="{{URL::To('slide/update')}}" method="POST"  enctype="multipart/form-data">
										<div class="form-body">
											<div class="form-group form-md-line-input">
												<div class="input-group">
													<input type="hidden" id="id" name="id">
													<input type="hidden" name="_token" value="{{ csrf_token() }}">
													<input type="text" class="form-control" placeholder="Caption" name="caption1" id="caption1">
													<label for="form_control_1">Slide Caption</label>
													<span class="input-group-addon">
														<i class="fa fa-envelope"></i>
													</span>
												</div>
											</div>
											<div class="form-group form-md-line-input">
												<textarea class="form-control" rows="3" placeholder="Some Description..." name="description1" id="description1"></textarea>
												<label for="form_control_1">Description</label>
											</div>
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" name="status1" id="status1">
													<option value="1">Show</option>
													<option value="0">Hide</option>
												</select>
												<label for="form_control_1">Status</label>
											</div>
											<div class="form-group form-md-line-input has-info">
												<select class="form-control" name="order1" id="order1">
													<option value="1">1</option>
													<option value="2">2</option>
													<option value="3">3</option>
													<option value="4">4</option>
													<option value="5">5</option>
												</select>
												<label for="form_control_1">Order</label>
											</div>
											<div class="form-group form-md-line-input">
												<input type="file" class="form-control" name="image">
												<label for="form_control_1">Image:</label>
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
@stop



