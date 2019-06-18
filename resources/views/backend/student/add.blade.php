@extends('layouts.main_front')

@section('content')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Student</h4>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="{{url('dashboard')}}">
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
								<a href="#">Add Student</a>
							</li>
						</ul>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Student Info:</div>
								</div>
                                <form method="post" action="{{url('student/add')}}" enctype="multipart/form-data">
                                @csrf
								<div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Name</label>
												<input type="text" class="form-control" name="name_stu" id="name_stu" placeholder="Enter Name">
												<small id="nameHelp2" class="form-text text-muted">We'll never share your name with anyone else.</small>
											</div>
											<div class="form-group">
												<label for="password">DOB</label>
												<input type="date" class="form-control" name="dob_stu" id="dob_stu" placeholder="Data Of Birth">
											</div>
                                            <div class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="gender_stu" value="1"  checked="">
													<span class="form-radio-sign">Male</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="gender_stu" value="2">
													<span class="form-radio-sign">Female</span>
												</label>
											</div>
                                            <div class="form-group">
												<label for="disableinput">Religion</label>
												<input type="text" class="form-control" name="religion_stu" id="religion_stu" placeholder="Enter Religion" >
											</div>
                                            <div class="form-group">
												<label for="disableinput">Blood Group</label>
												<input type="text" class="form-control" name="bgroup_stu" id="bgroup_stu" placeholder="Blood Group" >
											</div>
											<div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Nationlity</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" name="nationlity_stu" id="nationlity_stu" placeholder="Nationlity">
												</div>
											</div>
                                            <div class="form-group form-inline">
												<label for="inlineinput" class="col-md-3 col-form-label">Mobile</label>
												<div class="col-md-9 p-0">
													<input type="text" class="form-control input-full" name="mobile_stu" id="mobile_stu" placeholder="Mobile Number ">
												</div>
											</div>
                                            </div>
										<div class="col-md-6 col-lg-4">

											<div class="form-group">
												<div class="input-group mb-3">
													<input type="email" class="form-control" name="email_stu" id="email_stu" placeholder="Student Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
													<div class="input-group-append">
														<span class="input-group-text" id="basic-addon2">@example.com</span>
													</div>
												</div>
											</div>
                                            <div class="form-group">
												<label for="email2">Father Name</label>
												<input type="text" class="form-control" name="father_stu" id="father_stu" placeholder="Enter Name">
											</div>
                                            <div class="form-group">
												<label for="email2">Father Number</label>
												<input type="text" class="form-control" name="father_mobile" id="father_mobile" placeholder="Mobile Number">
											</div>
                                            <div class="form-group">
												<label for="email2">Mother Name</label>
												<input type="text" class="form-control" name="mother_stu" id="mother_stu" placeholder="Enter Name">
											</div>
                                            <div class="form-group">
												<label for="email2">Mother Number</label>
												<input type="text" class="form-control" name="mother_mobile" id="mother_mobile" placeholder="Mobile Number">
											</div>
                                            <div class="form-group">
												<label for="email2">Guardian </label>
												<input type="text" class="form-control" name="guardian_stu" id="guardian_stu" placeholder="Guardian">
											</div>
                                            <div class="form-group">
												<label for="email2">Guardian Number</label>
												<input type="text" class="form-control" name="guardian_mobile" id="guardian_mobile" placeholder="Mobile Number">
											</div>
                                            </div>
										    <div class="col-md-6 col-lg-4">
                                            <div class="form-group">
												<label for="exampleFormControlFile1">Upload Student Photo</label>
												<input type="file" class="form-control-file" id="photo_stu" name="photo_stu">
											</div>
                                            <div class="form-group">
												<label for="comment">Present Address</label>
												<textarea class="form-control" name="pre_address" id="pre_address" rows="5">

												</textarea>
											</div>

                                            <div class="form-group">
												<label for="comment">Parmanent Address</label>
												<textarea class="form-control" name="per_address" id="pre_address" rows="5">

												</textarea>
											</div>

                                            <div class="form-group">
												<label for="comment">Note</label>
												<textarea class="form-control" name="note_stu" id="note_stu" rows="5">

												</textarea>
											</div>
                                        </div>
									</div>
								</div>

							</div>
						</div>
					</div>
                    <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Academic Info:</div>
								</div>
                                <div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Registration No</label>
												<input type="text" class="form-control" name="reg_stu" readonly  id="reg_stu" placeholder="Registration No">
												<small id="nameHelp2" class="form-text text-muted">Reg no will generate automatically</small>
											</div>
											<div class="form-group">
												<label for="password"> Id Card No</label>
												<input type="text" class="form-control" name="idCard_stu" id="idCard_stu" placeholder="Id Card No">
											</div>


                                            </div>
										<div class="col-md-6 col-lg-4">


                                        <div class="form-group">
												<label for="exampleFormControlSelect1">Class</label>
												<select class="form-control" id="class_stu" name="class_stu">
                                                <option value="101">Pick up class..</option>
                                                @foreach($iclass as $class)

													<option value="{{$class->id}}">{{$class->cls_name}}</option>
                                                @endforeach
												</select>
											</div>
                                            <div class="form-group">
												<label for="email2">Roll Number</label>
												<input type="text" class="form-control" name="roll_stu" id="roll_stu" placeholder="Roll Number">
											</div>
                                            <div class="form-group">
												<label for="exampleFormControlSelect1">Shift</label>
												<select class="form-control" id="shift_stu" name="shift_stu">
                                                <option value="Morning">Morning</option>
                                                <option value="Day">Day</option>
                                                </select>
											</div>
                                        </div>
										    <div class="col-md-6 col-lg-4">

                                            <div class="form-group">
												<label for="exampleFormControlSelect1">Section</label>
												<select class="form-control" id="section_stu" name="section_stu">
                                                <option value="101">Pick up section..</option>

                                                    @foreach($section as $sec)
                                                    <option class="sectionName id{{$sec->class_id}}" value="{{$sec->id}}">{{$sec->sec_name}}</option>
                                                    @endforeach
                                                </select>
											</div>

                                            <div class="form-group">
												<label for="email2">Elective/4th Subject</label>

                                                <select class="form-control" id="elective_sub_stu" name="elective_sub_stu">
                                                <option value="0">Pick up section..</option>

                                                    @foreach($electives as $elective)
                                                    <option  value="{{$elective->code}}">{{$elective->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                        </div>
									</div>
								</div>
								<div class="card-action">
									<button type="submit" class="btn btn-success">Save</button>
									<button type="submit"class="btn btn-danger">Cancel</button>
								</div>
                                </form>
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
