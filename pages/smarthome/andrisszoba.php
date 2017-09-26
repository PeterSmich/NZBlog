<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['valid'])){
    $_SESSION['valid'] = false;
  }
  $_SESSION['redirect_url'] = "/pages/smarthome/andrisszoba.php";
  if( $_SESSION['valid'] == true){
  }else{
    header("Location: ../../login.php");
  }
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
$page_title = "CHLoud | Smart Home";
$page_level = "../../";
$page_type = "smarthome";
include("../../header.php");
include("../../navigation.php");
?>

	<!-- Content Wrapper. Contains page content -->
	<div class="content-wrapper">
		<!-- Content Header (Page header) -->
		<section class="content-header">
			<h1>
				Smart Home
				<small>Andris Szobája</small>
			</h1>
			<ol class="breadcrumb">
				<li><a href="#" style="color: #fff;"><i class="fa fa-bullseye"></i>Smart Home</a></li>
				<li class="active" style="color: #fff;">Andris Szobája</li>
			</ol>
		</section>

		<!-- Main content -->
		<section class="content">
      <script src></script>

      <!-- Your Page Content Here -->

      <div class="row">
        <div class="col-md-6">
          <div class="box box-solid box-success">
            <div class="box-header">
              <h3 class="box-title">Szín beállítása</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="background-color: #0f0f0f;">
              <table class="table table">
                <tr style="border: 0px;">
                  <td  align="center" style="border: 0px;">
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ff0000;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ff4c00;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ff7200;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ffc700;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ffff00;"></button>
                    </div>
                  </td>
                  <td  align="center" style="border: 0px;">
                    <div class="btn-group-vertical">
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#00ff00;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#00ff6e;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#00ff9d"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#00e5ff;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#00a9ff"></button>
                    </div>
                  </td>
                  <td  align="center" style="border: 0px;">
                    <div class="btn-group-vertical" align="center">
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#0000ff;"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#6e00ff"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#d000ff"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ff00ee"></button>
                      <button type="button" class="btn btn-default" style="height:40px;width:75px; background:#ff007f;"></button>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Fehér fény kiválasztása</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="background-color: #f0f0f0;">
              <table class="table table-bordered">
                <tr>
                  <td align="center">
                    <div class="btn-group">
                      <button type="button" class="btn btn-default" style="height:40px;width:55px">OFF</button>
                      <button type="button" class="btn btn-default" style="height:40px;width:55px">25%</button>
                      <button type="button" class="btn btn-default" style="height:40px;width:55px">50%</button>
                      <button type="button" class="btn btn-default" style="height:40px;width:55px">75%</button>
                      <button type="button" class="btn btn-default" style="height:40px;width:55px">100%</button>
                    </div>
                  </td>
                </tr>
              </table>
            </div>
          </div>
        </div>
      </div>


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
