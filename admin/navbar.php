  <nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" style="background-color: #123782;">
    <div class="navbar-header">
    <a href="home.php">  
      <div class="navbar-brand navbar-brand-center">
      <img class="navbar-brand-logo" src="../user/assets/img/MDC2.png">
        <span class="navbar-brand-text hidden-xs">Malang Digital Core</span>
      </div>
      </a>
    </div>
    <div class="navbar-container container-fluid">
      <!-- Navbar Collapse -->
      <div class="collapse navbar-collapse navbar-collapse-toolbar" style="padding-right:10px;">
        <!-- Navbar Toolbar -->
        <ul class="nav navbar-toolbar">
          <li class="hidden-float">
            <a data-toggle="menubar" href="#">
              <i class="icon hamburger hamburger-arrow-left">
                  <span class="sr-only">Toggle menubar</span>
                  <span class="hamburger-bar"></span>
                </i>
            </a>
          </li>
          <li class="hidden-xs">
            <a class="icon icon-fullscreen" data-toggle="fullscreen">
              <span class="sr-only">Toggle fullscreen</span>
            </a>
          </li>
        </ul>
        <!-- End Navbar Toolbar -->
        <!-- Navbar Toolbar Right -->
        <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
          <li>
            <a data-toggle="dropdown" href="#" data-animation="scale-up">
              <i class="icon wb-user"></i> Selamat Datang, <b><?php echo $_SESSION['username'];?></b>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li role="presentation">
                <a href="logout.php"><i class="icon wb-power"></i><b>Logout</b></a>
              </li>
            </ul>
          </li>
        </ul>
        <!-- End Navbar Toolbar Right -->
      </div>
      <!-- End Navbar Collapse -->
    </div>
  </nav>