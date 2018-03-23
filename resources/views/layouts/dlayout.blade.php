
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="images/favicon.png">

        <!-- App css -->
        <link href="plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/style.css" rel="stylesheet" type="text/css" />
        <script src="assets/js/modernizr.min.js"></script>
        <!-- Sweet Alert css -->
        <link href="plugins/sweet-alert/sweetalert2.min.css" rel="stylesheet" type="text/css" />

        <!-- Bootstrap fileupload css -->
        <link href="plugins/bootstrap-fileupload/bootstrap-fileupload.css" rel="stylesheet" />

        <!-- Table Responsive css -->
        <link href="plugins/responsive-table/css/rwd-table.min.css" rel="stylesheet" type="text/css" media="screen">


    </head>
    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="/" class="logo">
                            <span>
                                <img src="images/logosimple.png" alt="" height="40">
                            </span>
                            <i>
                                <img src="images/logosimple.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">

                            <img src="" alt="user-img" class="rounded-circle img-fluid">

                            {{-- <img src="http://via.placeholder.com/128x128" alt="user-img" class="rounded-circle img-fluid"> --}}


                        </div>
                        <h5><a href="#"></a></h5>
                        @php
                          // $roles_id = Auth::User()->roles_id;
                          // $namaRule = DB::table('roles')->where('id','=', $roles_id)->get()->first()->namaRule;
                          // $dashboardMenu = DB::table('dashmenu')->where('kepunyaan','=', $roles_id)->get();
                        @endphp
                        <p class="text-muted"></p>
                    </div>
                    <!--- Sidemenu -->
                    {{-- <div id="sidebar-menu">
                      <ul class="metismenu" id="side-menu">
                    @foreach ($dashboardMenu as $dmenu)
                              <!--<li class="menu-title">Navigation</li>-->
                              @if(DB::table('submenu')->where('kepunyaan','=', $dmenu->id)->get()->count() > 0)
                                @php
                                  $dashboardChild = DB::table('submenu')->where('kepunyaan','=', $dmenu->id)->get();
                                @endphp
                                <li>
                                    <a href="javascript: void(0);"><i class="{{$dmenu->class_css}}"></i><span> {{$dmenu->nama}} </span> <span class="menu-arrow"></span></a>
                                    <ul class="nav-second-level" aria-expanded="false">
                                        @foreach ($dashboardChild as $dchild)
                                          <li><a href="{{$dchild->link}}">{{$dchild->nama}}</a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                @else
                                  <li>
                                      <a href="{{$dmenu->link}}">
                                          <i class="{{$dmenu->class_css}}"></i><span> {{$dmenu->nama}} </span>
                                      </a>
                                  </li>
                              @endif
                  @endforeach
                          </ul>
                        </div> --}}
                      <!-- Sidebar -->
                    <div class="clearfix"></div>
                </div>
                <!-- Sidebar -left -->
            </div>
            <!-- Left Sidebar End -->


            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

                <!-- Top Bar Start -->
                <div class="topbar">

                    <nav class="navbar-custom">

                        <ul class="list-unstyled topbar-right-menu float-right mb-0">

                            <li class="dropdown notification-list">
                                <a class="nav-link dropdown-toggle nav-user" data-toggle="dropdown" href="#" role="button"
                                   aria-haspopup="false" aria-expanded="false">
                                   {{-- @if (Auth::User()->avatar != null || Auth::User()->avatar != "")
                                     <img src="{{Auth::User()->avatar}}" alt="user" class="rounded-circle"> <span class="ml-1">{{Auth::User()->nama}}<i class="mdi mdi-chevron-down"></i> </span>
                                   @else --}}
                                     <img src="http://via.placeholder.com/128x128" alt="user" class="rounded-circle"> <span class="ml-1"><i class="mdi mdi-chevron-down"></i> </span>
                                   {{-- @endif --}}

                                </a>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-animated profile-dropdown ">
                                    <!-- item-->
                                    <div class="dropdown-item noti-title">
                                        <h6 class="text-overflow m-0">Selamat Datang !</h6>
                                    </div>

                                    <!-- item-->
                                    <a href="/myprofile" class="dropdown-item notify-item">
                                        <i class="fi-head"></i> <span>Akun Saya</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-cog"></i> <span>Pengaturan</span>
                                    </a>

                                    <!-- item-->
                                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                                        <i class="fi-help"></i> <span>Support</span>
                                    </a>

                                    <!-- item-->
                                    <a href="/logout" class="dropdown-item notify-item">
                                        <i class="fi-power"></i> <span>Logout</span>
                                    </a>

                                </div>
                            </li>

                        </ul>

                        <ul class="list-inline menu-left mb-0">
                            <li class="float-left">
                                <button class="button-menu-mobile open-left disable-btn">
                                    <i class="dripicons-menu"></i>
                                </button>
                            </li>

                        </ul>

                    </nav>

                </div>
                <!-- Top Bar End -->



                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">
                      @yield('content')

                                </div>
                            </div>
                        </div>
                        <!-- end row -->
                    </div> <!-- container -->
                </div> <!-- content -->
                <footer class="footer text-right">
                  <p class="account-copyright"><?php echo date("Y"); ?> © FreeSent. - c3budiman.web.id</p>
                </footer>
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/metisMenu.min.js"></script>
        <script src="plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <script src="plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Counter Up  -->
        <script src="plugins/waypoints/lib/jquery.waypoints.min.js"></script>
        <script src="plugins/counterup/jquery.counterup.min.js"></script>
        <!-- responsive-table-->
        <script src="plugins/responsive-table/js/rwd-table.min.js" type="text/javascript"></script>


        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        @yield('jstambahan')


    </body>
</html>
