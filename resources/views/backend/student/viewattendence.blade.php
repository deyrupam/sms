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
												<div class="separator">Class: {{$reg->cls_name}} Sec : {{$reg->sec_name}}</div>
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
									<div class="card-title">Attendence Card</div>
								</div>
								<div class="card-body">
									<table class="table table-hover">
                                    <thead>
                                            <tr>

                                                <td>Date</td>
												<td>Status</td>
                                            </tr>
                                        </thead>

										<tbody>
                                        @foreach($dataAttendence as $attendence)
											<tr>
												<td>{{$attendence->attend_date}}</td>
												<td>
                                                @if($attendence->status == 1)<button type="button" class="btn btn-icon btn-round btn-success">
                                                <span>P</span>
										</button></td>
                                        @else
                                        <button type="button" class="btn btn-icon btn-round btn-danger">
											<span>A</span>
										</button></td>
                                        @endif

											</tr>
                                        @endforeach
                                            <tr>

                                                <td>Attendence </td>
												<td> {{$attendingPercent[0]}}%</td>
                                            </tr>
                                            <tr>

                                            <td>  Total </td>
                                            <td> {{$attendingPercent[1]}} (Days) </td>
                                            </tr>
                                            <tr>


                                            </tr>
											</tbody>
									</table>
                                    {{$dataAttendence->links() }}

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
