<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <?php $base_public = "http://".$_SERVER['HTTP_HOST']."/proyectInicio/public/"; ?>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>AdminLTE 2 | Dashboard</title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<!-- Bootstrap 3.3.7 -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/bootstrap/css/bootstrap.min.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/awesome/css/font-awesome.min.css">
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/ionicons/css/ionicons.min.css">
	<!-- jvectormap -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/jvectormap/css/jquery-jvectormap.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>css/AdminLTE.min.css">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>css/skins/_all-skins.min.css">

	<!--select2-->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/select2/css/select2.min.css">
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/select2/css/select2-bootstrap.css">

	<!-- file input -->
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/fileinput-master/css/fileinput.min.css">
	<link rel="stylesheet" href="<?php echo $base_public; ?>plugin/fileinput-master/themes/explorer/theme.css">

	<!--boostrap table-->
	<link href="<?php echo $base_public; ?>plugin/bootstrap-table/bootstrap-table.min.css" rel="stylesheet">

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	 <!-- Google Font -->
	 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<?php echo $this->section('style')?>
</head>
<body class="hold-transition skin-blue sidebar-mini">

	<div class="wrapper">
	 	<?php echo $this->insert('partials/header'); ?>
		<?php echo $this->section('contenido'); ?>
		<?php echo $this->insert('partials/footer'); ?>
	</div>
	<!-- jQuery 3 -->
	<script src="<?php echo $base_public; ?>plugin/jquery/js/jquery.min.js"></script>
	<!-- Bootstrap 3.3.7 -->
	<script src="<?php echo $base_public; ?>plugin/bootstrap/js/bootstrap.min.js"></script>
	<!-- FastClick -->
	<script src="<?php echo $base_public; ?>plugin/fastclick/js/fastclick.js"></script>
	<!-- AdminLTE App -->

	<script src="<?php echo $base_public; ?>js/adminlte.min.js"></script>

	<!-- Sparkline -->
	<script src="<?php echo $base_public; ?>plugin/jquery-sparkline/js/jquery.sparkline.min.js"></script>
	<!-- jvectormap  -->
	<script src="<?php echo $base_public; ?>plugin/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script>
	<script src="<?php echo $base_public; ?>plugin/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script>
	<!-- SlimScroll -->
	<script src="<?php echo $base_public; ?>plugin/slimscroll/js/jquery.slimscroll.min.js"></script>
	<!-- ChartJS -->
	<script src="<?php echo $base_public; ?>plugin/chart/js/Chart.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<script src="<?php echo $base_public; ?>js/pages/dashboard2.js"></script>
	<!-- select2 --> 
	<script src="<?php echo $base_public; ?>plugin/select2/js/select2.full.js"></script>

	<!-- file input -->
	<script src="<?php echo $base_public; ?>plugin/fileinput-master/js/fileinput.min.js"></script>
	<script src="<?php echo $base_public; ?>plugin/fileinput-master/themes/explorer/theme.min.js"></script>

	<script src="<?php echo $base_public; ?>js/init.js"></script>

	<!--boostrap table-->
	<script src="<?php echo $base_public; ?>plugin/bootstrap-table/bootstrap-table.min.js"></script>
	<script src="<?php echo $base_public; ?>plugin/bootstrap-table/extensions/mobile/bootstrap-table-mobile.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.12.1/locale/bootstrap-table-en-US.js"></script>

	<!-- AdminLTE for demo purposes -->
	<!--<script src="<?php //echo $base_public; ?>js/demo.js"></script>-->

	<?php echo $this->section('script')?>
</body>
</html>