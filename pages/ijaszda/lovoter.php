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
        <small>Lövőtér</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="../ijaszda/ijaszda.php" style="color: #fff"><i class="fa fa-bullseye"></i> Íjászda</a></li>
        <li class="active" style="color: #fff">Lövőtér</li>
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

      <!-- Chose target -->
      <div class="row">
        <div class="col-md-6" >
          <div class="box box-solid box-success">
            <div class="box-header">
              <h3 class="box-title">Célpont kiválasztása</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="background-color: #0f0f0f;">
              <form>
                <input type="radio" name="vad" value="30"> Nyúl<br>
                <input type="radio" name="vad" value="70"> Róka<br>
                <input type="radio" name="vad" value="120"> Vaddisznó<br>
                <input type="radio" name="vad" value="200"> Őz<br>
                <input type="radio" name="vad" value="500"> Szarvas
              </form>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <div class="box box-solid box-primary">
            <div class="box-header">
              <h3 class="box-title">Statisztika</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="background-color: #0f0f0f;">
              <div class="progress progress active">
                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                  <span >NAN% Pont teljesítve</span>
                </div>
              </div>
              <table class="table">
                <tr>
                  <td>Lövések száma:</td>
                  <td style="width: 40px"><span class="badge bg-aqua">NAN</span></td>
                </tr>
                <tr>
                  <td>Átlagos érték:</td>
                  <td style="width: 40px"><span class="badge bg-blue">NAN</span></td>
                </tr>
                <tr>
                  <td>Mellélőtt:</td>
                  <td style="width: 40px"><span class="badge bg-red">NAN</span></td>
                </tr>
                <tr>
                  <td>Sikeres találat:</td>
                  <td style="width: 40px"><span class="badge bg-green">NAN</span></td>
                </tr>
              </table>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <a href="../ijaszda/mentes.php"><button  type="button" class="btn btn-block btn-info btn-lg">Mentés</button></a> <br>
        </div>
        <!-- Target tabel -->
        <div class="col-md-6">
          <div class="box box-solid box-warning" style="padding-bottom: 100%; background-color: #0f0f0f;">
            <div class="box-header">
              <h3 class="box-title">Céltábla</h3>
            </div><!-- /.box-header -->
            <div class="box-body" style="padding: 0; background-color: #0f0f0f;" >
              <div id="target-box">
                <div id="target-circle0">
                  <div id="target-circle1">
                    <div id="target-circle2">
                      <div id="target-circle3">
                        <div id="target-circle4">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div><!-- /.box-body -->
          </div><!-- /.box -->
          <button type="button" class="btn btn-block btn-danger btn-lg">Mellé</button>
        </div>
      </div>

      <!-- =========================================================== -->
      <br>
      <div class="callout callout-danger">
        <h4>A weboldal fejlesztés alatt!</h4>
        <p>Jelenleg a weboldal fejlesztés alatt áll. A tartalmak béta verzióban vannak jelen és nem minősülnek hivatalos tartalomnak!</p>
      </div>

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php include("../../footer.php"); ?>
