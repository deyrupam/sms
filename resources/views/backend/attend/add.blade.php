<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ url('assets/img/icon.ico')}}" type="image/x-icon" />

    <!-- Fonts and icons -->
    <script src="{{ url('assets/js/plugin/webfont/webfont.min.js')}}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"],
                urls: ['../assets/css/fonts.min.css']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>

    <!-- CSS Files -->
    <style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input {
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
</style>
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
                        <h4 class="page-title">Section</h4>
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
                    @include('flash_message') @yield('content')
                    <div class="row">

                        <div class="col-md-12">
                            <div class="card">
                                <div class="row">
                                    <div class="col-md-6 col-lg-4">
                                        <form method="GET" action="{{ url('attend')}}/add" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label for="exampleFormControlSelect1">Class</label>
                                                <select class="form-control" id="class_stu" name="class_stu">
                                                    <option value="101">Pick up class..</option>
                                                    @foreach($iclasses as $class)

                                                    <option value="{{$class->id}}">{{$class->cls_name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">

                                        <div class="form-group">
                                            <label for="exampleFormControlSelect1">Section</label>
                                            <select class="form-control" id="section_stu" name="section_stu">
                                                <option value="101">Pick up section..</option>

                                                @foreach($sections as $sec)
                                                <option class="sectionName id{{$sec->class_id}}" value="{{$sec->id}}">{{$sec->sec_name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-4">

                                        <div class="form-group">
                                            <label for="email2">Date </label>
                                            <input type="date" class="form-control" name="attend_date" id="attend_date">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-action">
                                    <button type="submit" id="get_stu_attend" class="btn btn-success">Go</button>

                                </div>
                                </form>
                            </div>

                            <div class="card-body">
                                <!-- Modal -->
                                <div class="card-header">
                                    <div class="card-title"></div>
                                </div>

                                <div class="table-responsive">
                                    <table id="add-row" class="display table table-striped table-hover">
                                        <thead>
                                            <tr>

                                                <th>Name</th>
                                                <th>Rollno</th>
                                                <th>Class</th>
                                                <th>Section</th>
                                                <th style="width: 10%">Action</th>
                                            </tr>
                                        </thead>
                                        <form method="POST" action="{{url('attend')}}/save" enctype="multipart/form-data"  >
                                        @csrf
                                            <tbody>
                                            <tr>
                                            <td><input type="hidden" class="form-control" name="date_of_attendence" id="date_of_attendence" value="{{$attend_date}}">
                                                </td>
                                            </tr>
                                            @foreach($student as $stu)
                                                <tr>

                                                    <td>{{$stu->name}}</td>
                                                    <td>{{$stu->roll_no}}</td>
                                                    <td>{{$stu->class_id}}</td>
                                                    <td>{{$stu->section_id}}</td>
                                                    <td></td>
                                                    <td>
                                                    <div class="form-button-action">
                                                    <input type="hidden" class="form-control" name="student_id[]" id="" value="{{$stu->id}}">
                                                     </div>
                                                    <div class="form-group">
												    <label for="exampleFormControlSelect1">Status</label>
												    <select class="form-control" id="attendence[]" name="attendence[]">
                                                    <option value="1">P</option>
                                                    <option value="0">A</option>
                                                    </select>
											       </div></td>

                                                </tr>
                                                @endforeach
                                                <tr>

                                                    <td>
                                                        <div class="card-action">
                                                        <input type="hidden" class="form-control" name="select_class_id" value="{{$select_class}}">
                                                        <input type="hidden" class="form-control" name="select_section_id" value="{{$select_section}}">
                                                            <button type="submit" class="btn btn-success">Save</button>

                                                        </div>
                                                    </<input>
                                                </tr>

                                            </tbody>
                                        </form>

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

    <script>
        $(document).ready(function() {
            $('#basic-datatables').DataTable({});

            $('#multi-filter-select').DataTable({
                "pageLength": 5,
                initComplete: function() {
                    this.api().columns().every(function() {
                        var column = this;
                        var select = $('<select class="form-control"><option value=""></option></select>')
                            .appendTo($(column.footer()).empty())
                            .on('change', function() {
                                var val = $.fn.dataTable.util.escapeRegex(
                                    $(this).val()
                                );

                                column
                                    .search(val ? '^' + val + '$' : '', true, false)
                                    .draw();
                            });

                        column.data().unique().sort().each(function(d, j) {
                            select.append('<option value="' + d + '">' + d + '</option>')
                        });
                    });
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
