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
$page_title = "CHLoud | Íjászda";
$page_level = "../../";
$page_type = "ijaszda";
include("../../header.php");
include("../../navigation.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Íjaszda
        <small>Vegetáció</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../ijaszda/ijaszda.php" style="color: #fff"><i class="fa fa-bullseye"></i> Íjászda</a></li>
        <li class="active" style="color: #fff">Vegetáció</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>

      <div class="row">
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3>Szafari</h3>
            </div>
            <div class="icon">
              <i class="fa fa-map"></i>
            </div>
            <a href="../ijaszda/lovoter.php" class="small-box-footer">
              Kiválaszt <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>Füvespuszta</h3>
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <a href="../ijaszda/lovoter.php" class="small-box-footer">
             Kiválaszt <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>CCCCCC</h3>
            </div>
            <div class="icon">
              <i class="ion ion-map"></i>
            </div>
            <a href="../ijaszda/lovoter.php" class="small-box-footer">
              Kiválaszt <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3>+1+1+1+1</h3>
            </div>
            <div class="icon">
              <i class="fa fa-map-o"></i>
            </div>
            <a href="../ijaszda/lovoter.php" class="small-box-footer">
              Kiválaszt <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

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
