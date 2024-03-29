<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Dashboard</title>
	<meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
	<link rel="icon" href="{{ url('assets/img/icon.ico')}}" type="image/x-icon"/>

	<!-- Fonts and icons -->
	<script src="{{ url('assets/js/plugin/webfont/webfont.min.js')}}"></script>
	<script>
		WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ['../assets/css/fonts.min.css']},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
	</script>

	<!-- CSS Files -->
	<link rel="stylesheet" href="{{ url('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{ url('assets/css/atlantis.min.css')}}">

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link rel="stylesheet" href="{{ url('assets/css/demo.css')}}">
</head>
<body data-background-color="dark">
	<div class="wrapper">
		<div class="main-header">
			@include('templates.main_header')
		</div>

		<!-- Sidebar -->
        @include('templates.sidebar')
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Student</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="fas fa-user-graduate"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">List</a>
							</li>


						</ul>
					</div>
                    @include('flash_message')
                    @yield('content')
					<div class="row">




						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="d-flex align-items-center">
										<h4 class="card-title">Add Row</h4>
										<a href="{{url('student/add')}}" class="btn btn-primary btn-round ml-auto">
											<i class="fa fa-plus"></i>
                                            Add Row
                                        </a>
									</div>
								</div>
								<div class="card-body">
									<!-- Modal -->


									<div class="table-responsive">
										<table id="add-row" class="display table table-striped table-hover" >
											<thead>
												<tr>

                                                    <th>Photo</th>
                                                    <th>Regno</th>
                                                    <th>RollNO</th>
													<th>Idcard</th>
                                                    <th>Name</th>
                                                    <th>Mobile</>
													<th>Email</th>
													<th>Status</th>
													<th style="width: 10%">Action</th>
												</tr>
											</thead>
											<tfoot>
												<tr>
                                                    <th>Photo</th>
                                                    <th>Regno</th>
                                                    <th>RollNO</th>
													<th>Idcard</th>
                                                    <th>Name</th>
                                                    <th>Mobile</>
													<th>Email</th>
													<th>Status</th>
													<th>Action</th>
												</tr>
											</tfoot>
											<tbody>
                                            @foreach($StudentData as $Student)
												<tr>
													<td>
                                                        <div class="avatar">
                                                        @if ($Student->photo)
                                                        <img src="../upload/{{$Student->photo}}" alt="..." class="avatar-img rounded-circle">
                                                        @else
                                                        <img src="../upload/deafult.png" alt="..." class="avatar-img rounded-circle">
                                                        @endif
                                                        </div>
											        </td>
													<td>{{ $Student->reg_no }}</td>
                                                    <td>{{ $Student->roll_no }}</td>
                                                    <td>{{ $Student->card_no }}</td>
                                                    <td>{{ $Student->name }}</td>
													<td>{{ $Student->phone_no }}</td>
                                                    <td>{{ $Student->email }}</td>
                                                    <td>@if($Student->status ==true)
													active
													@else
													not
													@endif
													</td>
                                                    <td>
														<div class="form-button-action">
															<a class="btn btn-link btn-primary btn-lg" href="{{url('student/edit')}}/{{ $Student->id }}">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a class="btn btn-link btn-primary btn-lg" href="{{url('student/')}}/{{ $Student->id }}">
                                                            <i class="fas fa-eye"></i>
                                                            </a>
															<a class="btn btn-link btn-danger" href="{{url('student/')}}/{{ $Student->id }}">
																<i class="fa fa-times"></i>
															</a>
														</div>
													</td>
                                                </tr>
                                                @endforeach
												</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul class="nav">
							<li class="nav-item">
								<a class="nav-link" href="https://www.themekita.com">
									ThemeKita
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Help
								</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" href="#">
									Licenses
								</a>
							</li>
						</ul>
					</nav>
					<div class="copyright ml-auto">
						2018, made with <i class="fa fa-heart heart text-danger"></i> by <a href="https://www.themekita.com">ThemeKita</a>
					</div>
				</div>
			</footer>
		</div>

		<!-- Custom template | don't include it in your project! -->
        @include('templates.custom_template')
		<!-- End Custom template -->
	</div>
    <!--   Core JS Files   -->

	<script src="{{  url('assets/js/core/jquery.3.2.1.min.js') }}"></script>
	<script src="{{  url('assets/js/core/popper.min.js') }}"></script>
	<script src="{{  url('assets/js/core/bootstrap.min.js') }}"></script>

	<!-- jQuery UI -->
	<script src="{{  url('assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
	<script src="{{  url('assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

	<!-- jQuery Scrollbar -->
	<script src="{{  url('assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>


	<!-- Chart JS -->
	<script src="{{  url('assets/js/plugin/chart.js/chart.min.js') }}"></script>

	<!-- jQuery Sparkline -->
	<script src="{{  url('assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

	<!-- Chart Circle -->
	<script src="{{  url('assets/js/plugin/chart-circle/circles.min.js') }}"></script>

	<!-- Datatables -->
	<script src="{{  url('assets/js/plugin/datatables/datatables.min.js') }}"></script>

	<!-- Bootstrap Notify -->
	<script src="{{  url('assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

	<!-- jQuery Vector Maps -->
	<script src="{{  url('assets/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
	<script src="{{  url('assets/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

	<!-- Sweet Alert -->
	<script src="{{  url('assets/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

	<!-- Atlantis JS -->
	<script src="{{  url('assets/js/atlantis.min.js') }}"></script>

	<!-- Atlantis DEMO methods, don't include it in your project! -->
    <script src="{{  url('assets/js/setting-demo.js') }}"></script>
    <script src="{{  url('assets/js/main.js') }}"></script>
    <script >
		$(document).ready(function() {
			$('#basic-datatables').DataTable({
			});

			$('#multi-filter-select').DataTable( {
				"pageLength": 5,
				initComplete: function () {
					this.api().columns().every( function () {
						var column = this;
						var select = $('<select class="form-control"><option value=""></option></select>')
						.appendTo( $(column.footer()).empty() )
						.on( 'change', function () {
							var val = $.fn.dataTable.util.escapeRegex(
								$(this).val()
								);

							column
							.search( val ? '^'+val+'$' : '', true, false )
							.draw();
						} );

						column.data().unique().sort().each( function ( d, j ) {
							select.append( '<option value="'+d+'">'+d+'</option>' )
						} );
					} );
				}
			});

			// Add Row
			$('#add-row').DataTable({
				"pageLength": 5,
			});

			var action = '<td> <div class="form-button-action"> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-primary btn-lg" data-original-title="Edit Task"> <i class="fa fa-edit"></i> </button> <button type="button" data-toggle="tooltip" title="" class="btn btn-link btn-danger" data-original-title="Remove"> <i class="fa fa-times"></i> </button> </div> </td>';

			$('#addRowButton').click(function() {
				$('#add-row').dataTable().fnAddData([
					$("#addName").val(),
					$("#addPosition").val(),
					$("#addOffice").val(),
					action
					]);
				$('#addRowModal').modal('hide');

			});
		});
	</script>


</body>
</html>
