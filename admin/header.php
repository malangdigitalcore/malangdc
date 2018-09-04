<?php
require_once "functions.php";
session_start();
SessionChecker($_SESSION['username']);
opendb();
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
<link rel="stylesheet" href="global/vendor/footable/footable.core.css">
<link rel="stylesheet" href="base/assets/examples/css/tables/footable.css">
<link rel="stylesheet" href="global/vendor/select2/select2.css">
<link rel="stylesheet" href="global/vendor/bootstrap-select/bootstrap-select.css">
<link rel="stylesheet" href="global/vendor/multi-select/multi-select.css">
<link rel="stylesheet" href="global/vendor/chartist-js/chartist.css">
<link rel="stylesheet" href="global/vendor/aspieprogress/asPieProgress.css">
<link rel="stylesheet" href="global/vendor/datatables-bootstrap/dataTables.bootstrap.css">
<link rel="stylesheet" href="global/vendor/datatables-fixedheader/dataTables.fixedHeader.css">
<link rel="stylesheet" href="global/vendor/datatables-responsive/dataTables.responsive.css">
<link rel="stylesheet" href="global/vendor/editable-table/editable-table.css">
<link rel="stylesheet" href="base/assets/examples/css/pages/invoice.css">
<link rel="stylesheet" href="base/assets/examples/css/pages/login-v2.css">
<link rel="stylesheet" href="base/assets/examples/css/dashboard/v2.css">
<link rel="stylesheet" href="base/assets/examples/css/forms/layouts.css">
<link rel="stylesheet" href="base/assets/examples/css/tables/datatable.css">
<link rel="stylesheet" href="base/assets/examples/css/forms/advanced.css">
<link rel="stylesheet" href="base/assets/custom.css">
<!-- Fonts -->
<link rel="stylesheet" href="global/fonts/font-awesome/font-awesome.css">
<link rel="stylesheet" href="global/fonts/web-icons/web-icons.min.css">
<link rel="stylesheet" href="global/fonts/brand-icons/brand-icons.min.css">
<link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:300,400,500,300italic'>
<script src="global/vendor/modernizr/modernizr.js"></script>
<script src="global/vendor/breakpoints/breakpoints.js"></script>
<script>
Breakpoints();
</script>
<style>
.imageContainer {
    transition:transform 0.25s ease;
}

.imageContainer:hover {
    -webkit-transform:scale(4); /* or some other value */
    transform:scale(4);
}
#image-preview{
    display:none;
    width : 600px;
    height : 200px;
}
</style>
</head>