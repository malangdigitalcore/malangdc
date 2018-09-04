<?php
require_once "functions.php";
opendb();
$action = $_POST['action'];
if ($action == 'login'){
  $nama_pengguna = $_POST['nama_pengguna'];
  $kata_sandi    = $_POST['kata_sandi'];
  login($nama_pengguna, $kata_sandi);
}
?>
<!DOCTYPE html>
<html class="no-js css-menubar" lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
<meta name="description" content="bootstrap admin template">
<meta name="author" content="">
<title>Malang Digital Core</title>
<link rel="apple-touch-icon" href="../user/assets/img/MDC2.png">
<link rel="shortcut icon" href="../user/assets/img/MDC2.png">
<!-- Stylesheets -->
<link rel="stylesheet" href="global/css/bootstrap.min.css">
<link rel="stylesheet" href="global/css/bootstrap-extend.min.css">
<link rel="stylesheet" href="base/assets/css/site.min.css">
<!-- Plugins -->
<link rel="stylesheet" href="global/vendor/animsition/animsition.css">
<link rel="stylesheet" href="global/vendor/asscrollable/asScrollable.css">
<link rel="stylesheet" href="global/vendor/switchery/switchery.css">
<link rel="stylesheet" href="global/vendor/intro-js/introjs.css">
<link rel="stylesheet" href="global/vendor/slidepanel/slidePanel.css">
<link rel="stylesheet" href="global/vendor/flag-icon-css/flag-icon.css">
<link rel="stylesheet" href="base/assets/examples/css/pages/login-v2.css">
<!-- Fonts -->
<link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<script src="global/vendor/modernizr/modernizr.js"></script>
<script src="global/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
</head>
<body class="page-login-v2 layout-full page-dark">
  <div class="page animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
    <div class="page-content">
      <div class="page-brand-info">
        <div class="brand">
          <img class="brand-img" src="../user/assets/img/MDC2.png" style="width:10%">
          <h2 class="brand-text font-size-40">Malang Digital Core</h2>
        </div>
        <p class="font-size-20">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam pretium ut sapien ac lacinia. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum a ante blandit, egestas odio at, vulputate arcu. Aliquam tortor nunc, facilisis id ante eget, consequat dignissim nisl.</p>
      </div>
      <div class="page-login-main">
        <div class="brand visible-xs">
          <img class="brand-img" src="base/assets/images/logo-blue@2x.png">
          <h3 class="brand-text font-size-40">Remark</h3>
        </div>
        <h3 class="font-size-24">Login</h3>
        <p>Malang Digital Core</b></p>
        <form method="post">
          <div class="form-group">
            <label><b>Username</b></label>
            <input type="text" class="form-control" name="nama_pengguna" required>
          </div>
          <div class="form-group">
            <label><b>Password</b></label>
            <input type="password" class="form-control" name="kata_sandi" required>
          </div>
          <button type="submit" class="btn btn-warning btn-block" name="action" value="login"><b>Masuk</b></button>
        </form>
        <footer class="page-copyright">
          <p>Website by <a href="../index.php">Malang Digital Core</a></p>
          <p>© <span id="year"></span>. All RIGHT RESERVED.</p>
        </footer>
      </div>
    </div>
  </div>
  <!-- End Page -->
  <!-- Core  -->
<script src="global/vendor/jquery/jquery.js"></script>
<script src="global/vendor/bootstrap/bootstrap.js"></script>
<script src="global/vendor/animsition/animsition.js"></script>
<script src="global/vendor/asscroll/jquery-asScroll.js"></script>
<script src="global/vendor/mousewheel/jquery.mousewheel.js"></script>
<script src="global/vendor/asscrollable/jquery.asScrollable.all.js"></script>
<script src="global/vendor/ashoverscroll/jquery-asHoverScroll.js"></script>
<!-- Plugins -->
<script src="global/vendor/switchery/switchery.min.js"></script>
<script src="global/vendor/intro-js/intro.js"></script>
<script src="global/vendor/screenfull/screenfull.js"></script>
<script src="global/vendor/slidepanel/jquery-slidePanel.js"></script>
<script src="global/vendor/jquery-placeholder/jquery.placeholder.js"></script>
<!-- Scripts -->
<script src="global/js/core.js"></script>
<script src="base/assets/js/site.js"></script>
<script src="base/assets/js/sections/menu.js"></script>
<script src="base/assets/js/sections/menubar.js"></script>
<script src="base/assets/js/sections/gridmenu.js"></script>
<script src="base/assets/js/sections/sidebar.js"></script>
<script src="global/js/configs/config-colors.js"></script>
<script src="base/assets/js/configs/config-tour.js"></script>
<script src="global/js/components/asscrollable.js"></script>
<script src="global/js/components/animsition.js"></script>
<script src="global/js/components/slidepanel.js"></script>
<script src="global/js/components/switchery.js"></script>
<script src="global/js/components/jquery-placeholder.js"></script>
<script>
(function(document, window, $) {
  'use strict';
  var Site = window.Site;
  $(document).ready(function() {
    Site.run();
  });
})(document, window, jQuery);
</script>
</body>
</html>