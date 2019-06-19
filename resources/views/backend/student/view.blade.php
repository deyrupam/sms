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
								<a href="{{url('student')}}/">Student</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="{{url('student')}}/edit/{{$student->id}}">Profile</a>
							</li>
                            <li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
                            <li class="nav-item">
								<a href="{{url('student/attendence')}}/{{$student->id}}">Attendence</a>
							</li>
						</ul>
					</div>
					<div class="row">

                    <div class="col-md-4">
                    <div class="card">
                    <div class="item-list">
                    <div class="avatar avatar-xxl">
                                                @if ($student->photo)
                                                <img src="/upload/{{$student->photo}}" class="avatar-img rounded-circle">
                                                @else
                                                <img src="/upload/deafult.png" class="avatar-img rounded-circle">
                                                @endif
										</div>
											<div class="info-user ml-3">
												<div class="username">{{$student->name}}</div>
												<div class="status">Class : {{$reg->cls_name}}</div>
											</div>

					</div>
                    <div class="card">

								<div class="card-body">
									<table class="table table-hover">

										<tbody>


											<tr>

			                                   <td colspan="2">Registration No</td>
												<td>{{$reg->reg_no}}</td>
											</tr>

                                            <tr>

			                                   <td colspan="2">ID No</td>
												<td>{{$reg->card_no}}</td>
											</tr>
                                            <tr>

			                                   <td colspan="2">Phone</td>
												<td>{{$student->phone_no}}</td>
											</tr>
                                            <tr>

			                                   <td colspan="2">Email</td>
												<td>{{$student->email}}</td>
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
												<td>{{$student->name}}</td>
												<td>Date Of Birth</td>
												<td>{{$student->dob}}</td>
											</tr>
											<tr>
												<td>Gender</td>
												<td>@if($student->gender ==1)Male @else Female @endif</td>
												<td>Relion</td>
												<td>{{$student->religion}}</td>
											</tr>
                                            <tr>
												<td>Blood Group</td>
												<td>{{$student->blood_group}}</td>
												<td>Nationlity</td>
												<td>{{$student->nationality}}</td>
											</tr>
											<tr>
												<td>Email</td>
												<td>{{$student->email}}</td>
												<td>Relion</td>
												<td>{{$student->religion}}</td>
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
												<td>{{$student->father_name}}</td>
												<td>Phone No</td>
												<td>{{$student->father_phone_no}}</td>
											</tr>
											<tr>
                                                <td >Mother Name</td>
												<td>{{$student->mother_name}}</td>
												<td>Phone No</td>
												<td>{{$student->mother_phone_no }}</td>
											</tr>
											<tr>
                                                <td >guardian Name</td>
												<td>{{$student->guardian}}</td>
												<td>Phone No</td>
												<td>{{$student->guardian_phone_no}}</td>
											</tr>
                                            <tr>
                                                <td >Present Address</td>
												<td>{{$student->present_address}}</td>
												<td>Parmanent Address</td>
												<td>{{$student->permanent_address	}}</td>
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
												<td>{{$reg->ac_title}}</td>
												<td>Registraton No</td>
												<td>{{$reg->reg_no}}</td>
											</tr>
											<tr>
												<td>Class</td>
												<td>{{$reg->cls_name}}</td>
												<td>Section</td>
												<td>{{$reg->sec_name}}</td>
											</tr>
											<tr>
												<td>Board Registration No</td>
												<td>{{$reg->board_regi_no}}</td>
												<td>Card No.</td>
												<td>{{$reg->card_no}}</td>

											</tr>
                                            <tr>
                                            <td colspan="3">Status</td>
                                            <td colspan="4">{{$reg->status}}</td>

											</tr>

										</tbody>
									</table>
								</div>
							</div>
						</div>

					</div>
                    <div class="card-action">
									<a  href="{{url('student')}}/{{$student->id}}" class="btn btn-primary btn-xs">Edit
                                    <i class="fa fa-edit"></i></a>

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
