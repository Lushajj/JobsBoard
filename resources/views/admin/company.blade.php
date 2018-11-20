@extends('admin.layouts.header-footer')
@section('css')
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
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
									</div>
								</div>

								<div class="table-responsive">
									<table data-sortable class="table table-hover table-striped">
										<thead>
											<tr>
												<th>No</th>
												<th>Resim</th>
												<th>Firma Adı</th>
												<th>Durum</th>
												<th>Email</th>
											</tr>
										</thead>

										<tbody>
                                            @foreach ($company as $row)
                                                <tr>
    												<td>{{ $row->id }}</td>
    												<td><img src="{{ $row->img }}" alt=""></td>
                                                    <td><strong>{{ $row->name }}</strong></td>
                                                    <td>{!! $row->status == 'aktif' ? '<span style="cursor:pointer;" class="label label-success" data-id="'.$row->id.'" onclick="status(this);">Aktif </span>' : '<span style="cursor:pointer;" class="label label-warning" data-id="'.$row->id.'" onclick="status(this);">Beklemede </span>' !!}</td>
    												<td>{{ $row->email }}</td>
    												<td>
    													<div class="btn-group btn-group-xs">
    														<a {!! "data-id='".$row->id."'" !!} onclick="sil(this);" data-toggle="tooltip" title="Sil" class="btn btn-default"><i class="fa fa-trash"></i></a>
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
    @section('js')
        <script type="text/javascript">
            function sil(elem){
                var dataid = $(elem).data("id");
                var a=$(elem).parent();
                var b = a.parent();
                var c = b.parent();
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "{{ route('admin.company.delete') }}",
                    data: {
                        id: dataid
                    },
                    success: function( msg ) {
                        $(elem).fadeOut(500, function() { c.remove(); });
                        swal({
                          title: 'Başarılı!',
                          text: 'Firma başarılı bir şekilde silindi.',
                          type: 'success',
                          confirmButtonText: 'Devam Et'
                        })
                    }
                });
            }
            function status(elem) {
                var dataid = $(elem).data("id");
                var status;
                var sinif;
                if ($(elem).text()=='Aktif ') {
                    status = 'beklemede ';
                    sinif = 'label label-warning';
                }
                else if($(elem).text()=='aktif '){
                    status = 'beklemede ';
                    sinif = 'label label-warning';
                }
                else{
                    status = 'aktif ';
                    sinif = 'label label-success';
                }
                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });
                $.ajax({
                    type: "post",
                    dataType: 'json',
                    url: "{{ route('admin.company.status') }}",
                    data: {
                        id: dataid,
                        status: status,
                    },
                    success: function( msg ) {
                        $(elem).html(status);
                        $(elem).removeClass();
                        $(elem).addClass(sinif);
                    }
                });
            }
        </script>
    @endsection
