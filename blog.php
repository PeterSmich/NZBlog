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
    
<!-- Mirrored from wearepuredesign.com/dolomia/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 19:44:11 GMT -->

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

<!-- Mirrored from wearepuredesign.com/dolomia/blog-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 19:49:10 GMT -->
</html>