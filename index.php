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
  $_SESSION['redirect_url'] = "index.php";
?>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<?php
$page_title = "CHLoud | Home";
$page_level = "";
$page_type = "index";
include("header.php");
include("navigation.php");
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Home
        <small>Hírke</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#" style="color:#ffffff;"><i class="fa fa-home"></i> Home</a></li>
        <li class="active" style="color:#ffffff;">Hírek</li>
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
      <div class="col-md-6"></div>
      <div class="col-md-6">
       <?php
          if($_SESSION['valid'] == true){
          echo '<div class="box box-info box-solid" style="padding-bottom: 100%; ">
            <div class="box-header with-border">
              <h3 class="box-title">Naptár</h3>
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="padding-left: 0; width: 100%; height: 100%; ">
               <iframe src="https://teamup.com/ksxejfuc18ewt3po1v" frameborder="0" style="position: absolute; width: 99.6%; height: 92.4%; "></iframe>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->';}
        ?>
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


  <?php include("footer.php"); ?>
