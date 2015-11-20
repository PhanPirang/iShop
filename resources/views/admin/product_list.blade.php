@extends('layout.master')

@section('title')
	List Product
@stop

@section('page_styles')
	<link rel="stylesheet" type="text/css" href="{{asset('admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}" />
@stop

@section('content')
	<div class="portlet box grey-cascade">
		<div class="portlet-title">
			<div class="caption">
				<i class="fa fa-globe"></i>Managed Table
			</div>
		</div>
		<div class="portlet-body">
			<div class="table-toolbar">
				<div class="row">
					<div class="col-md-6">
						<div class="btn-group">
							<button id="sample_editable_1_new" class="btn green">
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
					<th class="table-checkbox">
						<input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes"/>
					</th>
					<th>
						No
					</th>
					<th>
						Product Name
					</th>
					<th>
						Price
					</th>
					<th>
						Description
					</th>
					<th>
						Image
					</th>
				</tr>
				</thead>
				<tbody>
				@foreach($products as $key => $pro)
				<tr class="odd gradeX">
					<td>
						<input type="checkbox" class="checkboxes" value="1"/>
					</td>
					<td>
						{{$key+1}}
					</td>
					<td>
						{{$pro->name}}
					</td>
					<td>
						{{$pro->price}}
					</td>
					<td>
						{{$pro->description}}
					</td>
					<td>
						<img src="{{asset('admin/assets/uploads/products' . '/' . $pro->image_path)}}" alt="" width="100">
					</td>
				</tr>
				@endforeach
				</tbody>
			</table>
		</div>
	</div>
@stop

@section('page_scripts')
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/datatables/media/js/jquery.dataTables.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('admin/assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}"></script>
@stop
