@extends('admin.layouts.header-footer')
@section('body')
<body class="fixed-left">
        @include('admin.layouts.sidebar')
	<div id="wrapper">
		<!-- Start right content -->
        <div class="content-page">
			<!-- ============================================================== -->
			<!-- Start Content here -->
			<!-- ============================================================== -->
            <div class="content">
								<!-- Page Heading Start -->
				<div class="page-heading">
            		<h1><i class="fa fa-building-o" aria-hidden="true"></i> Kayıtlı Firmalar</h1>
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="widget">
							<div class="widget-header transparent">
								<h2><strong>Toolbar</strong> CRUD Table</h2>
								<div class="additional-btn">
									<a href="#" class="hidden reload"><i class="icon-ccw-1"></i></a>
									<a href="#" class="widget-toggle"><i class="icon-down-open-2"></i></a>
									<a href="#" class="widget-close"><i class="icon-cancel-3"></i></a>
								</div>
							</div>
							<div class="widget-content">
								<div class="data-table-toolbar">
									<div class="row">
										<div class="col-md-4">
											<form role="form">
											<input type="text" class="form-control" placeholder="Search...">
											</form>
										</div>
										<div class="col-md-8">
											<div class="toolbar-btn-action">
												<a class="btn btn-success"><i class="fa fa-plus-circle"></i> Add new</a>
												<a class="btn btn-danger"><i class="fa fa-trash-o"></i> Delete</a>
												<a class="btn btn-primary"><i class="fa fa-refresh"></i> Update</a>
											</div>
										</div>
									</div>
								</div>

								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Resim</th>
												<th style="width: 30px" data-sortable="false"><input type="checkbox" class="rows-check"></th>
												<th>Firma Adı</th>
												<th>Email</th>
											</tr>
										</thead>

										<tbody>
                                            @foreach ($company as $row)
                                                <tr>
    												<td>{{ $row->id }}</td>
    												<td><img src="{{ $row->img }}" alt=""></td>
                                                    <td><input type="checkbox" class="rows-check"></td>
                                                    <td><strong>{{ $row->name }}</strong></td>
    												<td>{{ $row->email }}</td>
    												<td>
    													<div class="btn-group btn-group-xs">
    														<a data-toggle="tooltip" title="Off" class="btn btn-default"><i class="fa fa-power-off"></i></a>
    														<a data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-edit"></i></a>
    													</div>
    												</td>
    											</tr>
                                            @endforeach
										</tbody>
									</table>
								</div>

								<div class="data-table-toolbar">
									<ul class="pagination">
									  <li class="disabled"><a href="#">&laquo;</a></li>
									  <li class="active"><a href="#">1</a></li>
									  <li><a href="#">2</a></li>
									  <li><a href="#">3</a></li>
									  <li><a href="#">4</a></li>
									  <li><a href="#">5</a></li>
									  <li><a href="#">&raquo;</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>

            </div>
			<!-- ============================================================== -->
			<!-- End content here -->
			<!-- ============================================================== -->

        </div>
		<!-- End right content -->

	</div>
	<!-- End of page -->

    @endsection
