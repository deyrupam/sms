@extends('layouts.main_front')

@section('content')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Tables</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Tables</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Tables</a>
							</li>
						</ul>
					</div>
					<div class="row">

                    <div class="col-md-4">
                    <div class="card">
                    <div class="item-list">
                    <div class="avatar avatar-xxl">
											<img src="../../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
										</div>
											<div class="info-user ml-3">
												<div class="username">rupa</div>
												<div class="status">Back End Developer</div>
											</div>

					</div>
                    <div class="card">

								<div class="card-body">
									<table class="table table-hover">

										<tbody>


											<tr>

			                                   <td colspan="2">Registration No</td>
												<td></td>
											</tr>

                                            <tr>

			                                   <td colspan="2">ID No</td>
												<td>@twitter</td>
											</tr>
                                            <tr>

			                                   <td colspan="2">Phone</td>
												<td>@twitter</td>
											</tr>
                                            <tr>

			                                   <td colspan="2">Email</td>
												<td>@twitter</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>


                    </div>
                    </div>
						<div class="col-md-8">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Personal Info</div>
								</div>
								<div class="card-body">
									<table class="table table-hover">

										<tbody>
											<tr>
												<td>Name</td>
												<td>Rupam</td>
												<td>Date Of Birth</td>
												<td>14/06/90</td>
											</tr>
											<tr>
												<td>Gender</td>
												<td>Male</td>
												<td>Relion</td>
												<td>Hindu</td>
											</tr>
                                            <tr>
												<td>Blood Group</td>
												<td>A+</td>
												<td>Nationlity</td>
												<td>Indian</td>
											</tr>
											<tr>
												<td>Gender</td>
												<td>Male</td>
												<td>Relion</td>
												<td>Hindu</td>
											</tr>

										</tbody>
									</table>
								</div>
							</div>
                            <div class="card">
								<div class="card-header">
									<div class="card-title">Parents Info</div>
								</div>
								<div class="card-body">
									<table class="table table-hover">

										<tbody>
											<tr>
                                                <td >Father Name</td>
												<td>x father</td>
												<td>Phone No</td>
												<td>77975445</td>
											</tr>
											<tr>
                                                <td >Mother Name</td>
												<td>x father</td>
												<td>Phone No</td>
												<td>77975445</td>
											</tr>
											<tr>
                                                <td >guardian Name</td>
												<td>x guardian</td>
												<td>Phone No</td>
												<td>77975445</td>
											</tr>
                                            <tr>
                                                <td >Present Address</td>
												<td>2749 Kamren Coves Apt. 531 Sipesview, </td>
												<td>Parmanent Address</td>
												<td>8236 Valerie Union Apt. 369 Macejkovichaven,</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>

							<div class="card">
								<div class="card-header">
									<div class="card-title">Academic Info</div>
								</div>
								<div class="card-body">
									<table class="table table-hover">

										<tbody>
											<tr>
												<td>Academic Year</td>
												<td>Mark</td>
												<td>Registraton No</td>
												<td>@mdo</td>
											</tr>
											<tr>
												<td>Class</td>
												<td>Jacob</td>
												<td>Section</td>
												<td>@fat</td>
											</tr>
											<tr>
												<td>Board Registration No</td>
												<td>Jacob</td>
												<td>Card No.</td>
												<td>@fat</td>

											</tr>
                                            <tr>
                                            <td colspan="3">Status</td>
                                            <td colspan="4">active</td>

											</tr>

										</tbody>
									</table>
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
@endsection
