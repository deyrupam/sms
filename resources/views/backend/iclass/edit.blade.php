@extends('layouts.main_front')
@section('content')
<div class="main-panel">
			<div class="content">
				<div class="page-inner">
					<div class="page-header">
						<h4 class="page-title">Class</h4>
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
								<a href="{{url('iclass')}}">Class</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Edit</a>
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
									<div class="card-title">Class Info:</div>
								</div>
                                <form method="post" action="{{url('iclass/update')}}/{{$iclass->id}}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
									<div class="row">
										<div class="col-md-6 col-lg-4">
											<div class="form-group">
												<label for="email2">Class Name</label>
												<input type="text" class="form-control" name="cls_name"   id="cls_name" value="{{$iclass->cls_name}}">
												<small id="nameHelp2" class="form-text text-muted">Reg no will generate automatically</small>
											</div>
											<div class="form-group">
												<label for="password"> Teacher name</label>
												<input type="text" class="form-control" name="cls_teacher" id="cls_teacher"  value="{{$iclass->teacher_id}}">
											</div>


                                            </div>
										<div class="col-md-6 col-lg-4">


                                        <div class="form-group">
												<label for="email2">Code</label>
												<input type="text" class="form-control" name="cls_code" id="cls_code" value="{{$iclass->numeric_value}}">
											</div>
                                            <div class="form-group">
												<label for="email2">Note</label>
												<input type="text" class="form-control" name="cls_note" id="cls_note" value="{{$iclass->note}}">
											</div>
                                            <div class="form-group">
												<label for="exampleFormControlSelect1">status</label>

												<select class="form-control" id="cls_status" name="cls_status">
                                                @if($iclass->status==1)
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                                @else
                                                <option value="0">Inactive</option>
                                                <option value="1">Active</option>
                                                @endif

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
