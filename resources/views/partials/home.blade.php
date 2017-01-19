<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">
    <!-- NProgress -->
    <link  rel="stylesheet" href="{{ asset('css/nprogress.css') }}">
    <!-- jQuery custom content scroller -->
    <link rel="stylesheet" href="{{ asset('css/jquery.mCustomScrollbar.min.css') }}">

    <!-- Custom Theme Style -->
    <link rel="stylesheet" href="{{ asset('css/custom.min.css') }}">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>WeShare</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/img.PNG" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Kaboom</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Dashboard</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-desktop"></i> ChatRooms <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="#">Web Programming</a></li>
                      <li><a href="#">Web Design</a></li>
                      <li><a href="#">Database</a></li>
                      <li><a href="#">UI/UX</a></li>
                      <li><a href="#">Physics</a></li>
                      <li><a href="#">Biology</a></li>
                      <li><a href="#">Electrical Engineering</a></li>
                      <li><a href="#">AI</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
              <div class="menu_section">
                <h3>Personal</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-linux"></i> Extras <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="inbox.html">Inbox</a></li>
                      <li><a href="calendar.html">Calendar</a></li>
                    </ul>
                  </li>
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
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/img.PNG" alt="">Kaboom
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><span><a><i class="fa fa-sign-out pull-right"></i>{{ link_to_route('logout', 'Log Out') }}</a></span></li>
                  </ul>
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
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Content <small> Goes <strong>Here</strong></small></h3>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('js/libs/jquery.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('js/libs/bootstrap.min.js') }}"></script>
    <!-- FastClick -->
    <script type="text/javascript" src="{{ asset('js/libs/fastclick.js') }}"></script>
    <!-- NProgress -->
    <script type="text/javascript" src="{{ asset('js/libs/nprogress.js') }}"></script>
    <!-- jQuery custom content scroller -->
    <script type="text/javascript" src="{{ asset('js/libs/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Custom Theme Scripts -->
    <script type="text/javascript" src="{{ asset('js/libs/custom.min.js') }}"></script>
  </body>
</html>