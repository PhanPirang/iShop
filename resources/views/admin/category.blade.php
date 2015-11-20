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
							<button id="sample_editable_1_new" href="#basic" data-toggle="modal" class="btn green">
								Add New <i class="fa fa-plus"></i>
							</button>
						</div>
						<div class="btn-group">
							<button id="sample_editable_1_new" href="#update" data-toggle="modal" class="btn green">
								Update <i class="fa fa-plus"></i>
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
						Email
					</th>
					<th>
						Points
					</th>
					<th>
						Joined
					</th>
					<th>
						Status
					</th>
				</tr>
				</thead>
				<tbody>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				<tr class="odd gradeX">
					<td>
						1
					</td>
					<td>
						shuxer
					</td>
					<td>
						<a href="mailto:shuxer@gmail.com">shuxer@gmail.com </a>
					</td>
					<td>
						120
					</td>
					<td class="center">
						12 Jan 2012
					</td>
					<td>
						<span class="label label-sm label-success">Approved </span>
					</td>
				</tr>
				</tbody>
			</table>
			<div class="modal fade" id="basic" tabindex="-1" role="basic" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
							<h4 class="modal-title">Add New Category</h4>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-md-12">
									<form role="form" action="{{URL::To('category/add')}}" method="POST">
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
												<label for="form_control_1">Textarea input</label>
											</div>
											<div class="form-group form-md-line-input form-md-floating-label">
												<button type="submit" class="btn blue">Save changes</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn blue">Save changes</button>
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
										</div>
									</form>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn default" data-dismiss="modal">Close</button>
							<button type="button" class="btn blue">Save changes</button>
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