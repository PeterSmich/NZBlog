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
        Íjászda
        <small>Mentés</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../ijaszda/ijaszda.php" style="color: #fff"><i class="fa fa-bullseye"></i> Íjászda</a></li>
        <li class="active" style="color: #fff">Mentés</li>
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
        <div class="col-md-6" style="padding-bottom: 20px">
          <button type="button" class="btn btn-block btn-info btn-lg">Mentés file-ba</button>
        </div>

        <div class="col-md-6">
          <button type="button" class="btn btn-block btn-primary btn-lg">Mentés CHLoudDB-be</button>
        </div>
      </div><br>

      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>


    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include("../../footer.php"); ?>
