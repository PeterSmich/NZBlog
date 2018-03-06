<!DOCTYPE html>

<?php
  ob_start();
  session_start();
  $_default_language = 'hun';
  if(!isset($_SESSION['lang'])){
    $_SESSION['lang'] = $_default_language;
  }
  if(!empty($_GET['lang'])){
    $_SESSION['lang'] = $_GET['lang'] === 'hun' ? 'hun' : 'en';
  }
  // Load the driver
  require_once("assets/rdb/rdb.php");
  // Connect to localhost
  try{
	$conn = r\connect('localhost');
	$rdb_connect = true;
  }catch (Exception $e){
	  $rdb_connect = false;
  }
?>


<html lang="en">
    

<?php
$page_title = "NZ Blog | Blog";
$page_level = "";
$page_type = "blog";
include("header.php");
include("navigation.php");
?>
            <!--  END Header & Menu  -->
<?php
	if(!isset($_GET['blog'])){
		require_once('blog_all.php');
	}else{
		require_once('blog_one.php');
	}
?>

<?php
	require_once('footer.php')
?>

</html>