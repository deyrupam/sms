@extends('layouts.main_front')
@section('content')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Section</h4>
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
								<a href="{{url('iclass')}}">Section</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Add</a>
							</li>
                            <li class="nav-item">

						</ul>
					</div>
                    @include('flash_message')
                    @yield('content')
			          <div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<div class="card-title">Section : Add</div>
								</div>
                                <form method="post" action="{{url('section/save')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2"> Section Name</label>
												<input type="text" class="form-control" name="sec_name"   id="sec_name" placeholder="Section Name">
												<small id="nameHelp2" class="form-text text-muted">section name</small>
											</div>
											<div class="form-group">
												<label for="password"> Capacity</label>
												<input type="text" class="form-control" name="capacity_section" id="capacity_section"  placeholder="Capacity">
											</div>


                                            </div>
										<div class="col-md-6 col-lg-4">


                                        <div class="form-group">
												<label for="email2">Teacher ID</label>
												<select class="form-control" id="sec_teacher" name="sec_teacher">
                                                @foreach($teachers as $teacher)
                                                <option value="{{ $teacher->id }}">{{ $teacher->name }}</option>
                                                @endforeach
                                               </select>
											</div>
                                            <div class="form-group">
												<label for="email2">Class Id</label>
												<select class="form-control" id="sec_cls" name="sec_cls">
                                                @foreach($classes as $class)
                                                <option value="{{ $class->id }}">{{ $class->cls_name }}</option>
                                                @endforeach
                                               </select>
											</div>
                                            <div class="form-group">
												<label for="exampleFormControlSelect1">status</label>

												<select class="form-control" id="sec_status" name="sec_status">

                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>


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
