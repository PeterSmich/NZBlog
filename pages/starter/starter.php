<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['valid'])){
    $_SESSION['valid'] = false;
  }
  if( $_SESSION['valid'] == true){
  }else{
    $_SESSION['nickname'] = 'Anonymus';
  }
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
$page_title = "CHLoud | Starter";
$page_level = "../../";
$page_type = "starter";
include("../../header.php");
include("../../navigation.php");
?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Starter
				<small>page</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#" style="color: #fff;"><i class="fa fa-bullseye"></i> Sterter</a></li>
				<li class="active" style="color: #fff;">page</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">

			<!-- Your Page Content Here -->
			<div class="callout callout-danger">
				<h4>A weboldal fejlesztés alatt!</h4>
				<p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
			</div>

		</section>
		<!-- /.content -->
	</div>
	<!-- /.content-wrapper -->

	<!-- Main Footer -->
<?php include("../../footer.php"); ?>
