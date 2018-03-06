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
?>


<html lang="en">
    
<?php
$page_title = "NZ Blog | Contact";
$page_level = "";
$page_type = "contact";
include("header.php");
include("navigation.php");
?>
            <!--  END Header & Menu  -->
            
            <!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/contact.jpg)">
                            <div class="container text text-center">
								<?php
									if($_SESSION['lang'] == 'hun') {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">Kapcsolatok<br><br> </h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Kalandozas Uj-Zelandon</h2>';
									} else {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">Contact Us<br> </h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Exploreing New Zealand</h2>';
									}
								?>
							</div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
					<div class="container">
						<div class="col-md-12 padding-leftright-null ">
							<div class="text text-center">
								<ul class="info">
									<li>Mail <p >info@thereandback.hu</p></li>
									<li>YouTube Channel<p ><a href="https://www.youtube.com/channel/UCm_j1KDKKAywYH-PJ1XE4HA/">https://goo.gl/Ehcz22</a></p></li>
								</ul>
							</div>
						</div>
					</div>
					<div id="team">
                       <div class="container text">
							<div class="row">
								<div class="col-md-6 col-xs-12 col-sm-6 col-lg-3 single-person">
								   <div class="content">
									   <img src="assets/img/balintczucz.jpg" alt="BC">
										<div class="text text-center" style="padding: 0px;">
											<h4 style="padding: 15px;"><?php if($_SESSION['lang'] == 'hun'){echo'Czucz Bálit';}else{echo'Bálint Czucz';}?></h4>
											<ul class="info">
												<li>Mail <p >czuczb@hotmail.com</p></li>
												<li>Instagram<p><a href="https://instagram.com/balintczucz">instagram.com/<br>balintczucz</a></p></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-sm-6 col-lg-3 single-person">
								   <div class="content">
									   <img src="assets/img/andraskovach.jpg" alt="AK">
										<div class="text text-center" style="padding: 0px;">
											<h4 style="padding: 15px;"><?php if($_SESSION['lang'] == 'hun'){echo'Kovách András';}else{echo'András Kovách';}?></h4>
											<ul class="info">
												<li>Mail <p >kovach.andras@gmail.com</p></li>
												<li>Instagram<p><a href="https://instagram.com/andras.kovach">instagram.com/<br>andras.kovach</a></p></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-sm-6 col-lg-3 single-person">
								   <div class="content">
									   <img src="assets/img/tamaskovach.jpg" alt="TK">
										<div class="text text-center" style="padding: 0px;">
											<h4 style="padding: 15px;"><?php if($_SESSION['lang'] == 'hun'){echo'Kovách Tamás';}else{echo'Tamás Kovách';}?></h4>
											<ul class="info">
												<li>Mail <p >kovach.tamas@gmail.com</p></li>
												<li><br><p ><br><br></p></li>
											</ul>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-xs-12 col-sm-6 col-lg-3 single-person">
								   <div class="content">
									   <img src="assets/img/peterkovach.jpg" alt="PK">
										<div class="text text-center" style="padding: 0px;">
											<h4 style="padding: 15px;"><?php if($_SESSION['lang'] == 'hun'){echo'Kovách Péter';}else{echo'Péter Kovách';}?></h4>
											<ul class="info">
												<li>Mail<p >kovachpeter@gmail.com</p></li>
												<li><br><p ><br><br></p></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
            
<?php
	require_once('footer.php')
?>

</html>