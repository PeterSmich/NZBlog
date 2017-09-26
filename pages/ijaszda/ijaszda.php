<!DOCTYPE html>
<?php
  session_start();
  if(!isset($_SESSION['valid'])){
    $_SESSION['valid'] = false;
  }
  $_SESSION['redirect_url'] = "/pages/ijaszda/ijaszda.php";
  if( $_SESSION['valid'] == true){
  }else{
    header("Location: ../../login.php");
  }
  if(!isset($_SESSION['active_archery'])){
    $_SESSION['active_archery'] = false;
    $_SESSION['archery_type'] = null;
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
        Íjászda
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" style="color: #fff"><i class="fa fa-bullseye"></i> Íjászda</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->
      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>

      <!-- =========================================================== -->

      <div class="box box-solid bg-navy">
        <div class="box-header with-border ">
          <h3 class="box-title">Válassz vadászati formát!</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body" >
          <p style="color: #fff;">A <a class="text-yellow">Magányos Vadász</a> módban egyedül vadászhatsz a különböző területeken, míg ha <a class="text-light-blue">Hajtáson</a> veszel részt akkor a többi vadásszal együtt van lehetőséged vadat ejteni.</p>
        </div>
        <!-- /.box-body -->
      </div>

      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>Magányos Vadász</h3>
            </div>
            <div class="icon">
              <i class="fa fa-user" ></i>
            </div>
            <a href="../ijaszda/lovoter.php" class="small-box-footer">
              Tovább <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-6">
          <!-- small box -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>Hajtás</h3>
            </div>
            <div class="icon">
              <i class="fa fa-users"></i>
            </div>
            <a href="../ijaszda/vegetaciok.php" class="small-box-footer">
              Tovább <i class="fa fa-arrow-circle-right"></i>
            </a>
          </div>
        </div>
        </div>

      <!-- =========================================================== -->

      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("../../footer.php");  ?>
