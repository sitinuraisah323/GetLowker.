 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="/images/favicon.ico" type="image/ico" />

    <title>GetLowKer! | </title>

    <!-- Bootstrap -->
    <link href="/bootstrap/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="/bootstrap/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="/bootstrap/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="/bootstrap/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="/bootstrap/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="/bootstrap/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="/bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="/bootstrap/build/css/custom.min.css" rel="stylesheet">
    <link href="/bootstrap/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="/bootstrap/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="" class="site_title"><i class="fa fa-paw"></i> <span>GetLowKer !</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="/img/user.png " alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                @php $u = Auth::user(); @endphp
                <h2>{{ $u->name }}</h2>
                
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

           <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a href=" {{ route('admin.index') }} "><i class="fa fa-user"></i> Data Admin</a></li>
                  <li><a><i class="fa fa-user"></i> Data User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{ route('dataUser.index') }}">User</a></li>
                      <li><a href="{{ route('profilAdmin.index') }}">Profil</a></li>
                    </ul>
                  </li>
                  <li><a href=" {{ route('perusahaan.index') }} "><i class="fa fa-home"></i> Data Perusahaan </a></li>
                  <li><a href="{{ route('lowker1.index') }}"><i class="fa fa-desktop"></i> Data LowKer </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="/logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="/img/user.png  " alt=""> {{ $u->name }} 
                  </a>
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
                    
                    <a class="dropdown-item"  href="/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </div>
                </li>

                <li role="presentation" class="nav-item dropdown open">
                  
                  <ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="/img/user.png" alt="Profile Image" /></span>
                        <span>
                          <span> {{ $u->name }} </span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="/img/user.png" alt="Profile Image" /></span>
                        <span>
                          <span> {{ $u->name }} </span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="/img/user.png" alt="Profile Image" /></span>
                        <span>
                          <span> {{ $u->name }} </span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="dropdown-item">
                        <span class="image"><img src="/img/user.png " alt="Profile Image" /></span>
                        <span>
                           @php $u = Auth::user(); @endphp
                          <span> {{ $u->name }} </span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li class="nav-item">
                      <div class="text-center">
                        <a class="dropdown-item">
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          @yield('content')
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="/bootstrap/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="/bootstrap/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="/bootstrap/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="/bootstrap/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="/bootstrap/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="/bootstrap/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="/bootstrap/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="/bootstrap/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="/bootstrap/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="/bootstrap/vendors/Flot/jquery.flot.js"></script>
    <script src="/bootstrap/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="/bootstrap/vendors/Flot/jquery.flot.time.js"></script>
    <script src="/bootstrap/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="/bootstrap/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="/bootstrap/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="/bootstrap/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="/bootstrap/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="/bootstrap/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="/bootstrap/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="/bootstrap/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="/bootstrap/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="/bootstrap/vendors/moment/min/moment.min.js"></script>
    <script src="/bootstrap/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="/bootstrap/build/js/custom.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/bootstrap/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="/bootstrap/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="/bootstrap/vendors/jszip/dist/jszip.min.js"></script>
    <script src="/bootstrap/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="/bootstrap/vendors/pdfmake/build/vfs_fonts.js"></script>

  </body>
</html>
