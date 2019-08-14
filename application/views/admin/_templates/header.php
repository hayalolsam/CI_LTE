<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!doctype html>
<html lang="<?php echo $lang;?>">
  <head>
		<meta charset="<?php echo $charset; ?>">
		<title><?php echo $title; ?></title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php /*$mobile,$mobile_ie,$ios,$android not reqired*/ ?>
		<link rel="icon" href="<?php echo base_url();?>/favicon.ico">
		<!--link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/bootstrap/css/bootstrap.min.css'); ?>"-->
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/fontawesome-free/css/all.min.css'); ?>">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Tempusdominus Bbootstrap 4 -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css'); ?>">
		<!-- iCheck -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/icheck-bootstrap/icheck-bootstrap.min.css'); ?>">
		<!-- JQVMap -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/jqvmap/jqvmap.min.css'); ?>">
		<!-- Theme style -->
		
		<link rel="stylesheet" href="<?php echo base_url($frameworks_dir . '/adminlte/css/adminlte.min.css'); ?>">
		<!-- overlayScrollbars -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/overlayScrollbars/css/OverlayScrollbars.min.css'); ?>">
		<!-- Daterange picker -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/daterangepicker/daterangepicker.css'); ?>">
		<!-- summernote -->
		<link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/summernote/summernote-bs4.css'); ?>">
		<!-- Google Font: Source Sans Pro -->
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">


		<?php if ($this->router->fetch_class() == 'groups' && ($this->router->fetch_method() == 'create' OR $this->router->fetch_method() == 'edit')): ?>
    <link rel="stylesheet" href="<?php echo base_url($plugins_dir . '/colorpickersliders/colorpickersliders.min.css'); ?>">
  <?php endif; ?>
  </head>
  <body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
		
		
		
		
