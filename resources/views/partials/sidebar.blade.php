<div class="col-md-3 left_col menu_fixed">
  <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
      <a href="#" class="site_title"><i class="fa fa-paw"></i> <span>WeShare</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
      <div class="profile_pic">
        <img src="images/img.PNG" alt="..." class="img-circle profile_img">
      </div>
      <div class="profile_info">
        <span>Welcome,</span>
      <h2>{{ \Auth::user()->username }}</h2>
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
    </div><!-- /sidebar menu -->

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