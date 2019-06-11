@extends('layouts.main_front')

@section('content')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Student</h4>
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
								<a href="#">Student</a>
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
												<input type="text" class="form-control" name="dob_stu" id="dob_stu" placeholder="Data Of Birth">
											</div>
                                            <div class="form-check">
												<label>Gender</label><br/>
												<label class="form-radio-label">
													<input class="form-radio-input" type="radio" name="optionsRadios" value=""  checked="">
													<span class="form-radio-sign">Male</span>
												</label>
												<label class="form-radio-label ml-3">
													<input class="form-radio-input" type="radio" name="optionsRadios" value="">
													<span class="form-radio-sign">Female</span>
												</label>
											</div>
                                            <div class="form-group">
												<label for="disableinput">Religion</label>
												<input type="text" class="form-control" name="religion_stu" id="religioninput" placeholder="Enter Religion" >
											</div>
                                            <div class="form-group">
												<label for="disableinput">Blood Group</label>
												<input type="text" class="form-control" name="bgroup_stu" id="religioninput" placeholder="Blood Group" >
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

											<div class="form-check">
												<label class="form-check-label">
													<input class="form-check-input" type="checkbox" value="">
													<span class="form-check-sign">Agree with terms and conditions</span>
												</label>
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
												<input type="file" class="form-control-file" id="exampleFormControlFile1">
											</div>
                                            <div class="form-group">
												<label for="comment">Present Address</label>
												<textarea class="form-control" name="pre_address" id="pre_address" rows="5">

												</textarea>
											</div>

                                            <div class="form-group">
												<label for="comment">Parmanent Address</label>
												<textarea class="form-control" name="pre_address" id="pre_address" rows="5">

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
								<div class="card-action">
									<button class="btn btn-success">Save</button>
									<button class="btn btn-danger">Cancel</button>
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
