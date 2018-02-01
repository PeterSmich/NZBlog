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
            
            <!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/blog1.jpeg)">
                            <div class="container text text-center">
                                <?php
									if($_SESSION['lang'] == 'hun') {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">A történetünk<br></h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Kalandozas Uj-Zelandon</h2>';
									} else {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">The Road So Far<br></h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Exploreing New Zealand</h2>';
									}
								?>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                    </ul>
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap row grey-background">
                    <div class="container">
                        <div class="col-md-11 padding-leftright-null">
							<section id="masonry-filters" class="text">
								<!--  Filters  -->
								<div class="row margin-null">
									<div class="col-sm-12 padding-leftright-null text-center">
										<ul class="col-md-12 filters padding-leftright-null">
											<li data-filter="*" class="is-checked">All</li>
											<li data-filter=".nature">Nature</li>
											<li data-filter=".adventure">Adventure</li>
											<li data-filter=".lake">Lake</li>
											<li data-filter=".mountain">Mountain</li>
										</ul>
									</div>
								</div>
								<!--  END Filters  -->
							</section>
                            <!--  News Section  -->
                            <section id="news" class="page">
                                <div class="news-items equal one-columns">
								<?php 
									if($rdb_connect){
										try{
											$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->run($conn);
											$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
											if($num>0){
												foreach ($result as $doc){
													echo'
                                    <div class="single-news one-item horizontal-news">
                                        <article>
                                            <div class="col-md-4 padding-leftright-null">
                                                <div class="image" style="background-image:url(assets/img/blog/'.$doc['img'].')"></div>
                                            </div>
                                            <div class="col-md-8 padding-leftright-null">
                                                <div class="content">
                                                    <h3>'.$doc['title'].'</h3>
                                                    <span class="date">'.$doc['timestamp']->format('Y-m-d H:i:s').'</span>
                                                    <p>'.$doc['sort_content'].'</p>
                                                </div>
                                            </div>
                                            <a href="blog.php?blog="'.$doc['title'] .'class="link"></a>
                                        </article>
                                    </div>';
												}
											}else{
												echo '
									<div class="row margin-leftright-null grey-background">
										<div class="container">
											<div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
												<h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
												<p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There is no article jet';}echo'</p>
											</div>
										</div>
									</div>';
											}
										}catch(Exception $e){
											echo '
									<div class="row margin-leftright-null grey-background">
										<div class="container">
											<div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
												<h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
												<p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There is no article jet';}echo'</p>
											</div>
										</div>
									</div>';
										}
									}else{
											echo '
									<div class="row margin-leftright-null grey-background">
										<div class="container">
											<div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
												<h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
												<p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There is no article jet';}echo'</p>
											</div>
										</div>
									</div>';
									}
								?>
                                </div>
                            </section>
                            <!--  END News Section  -->
                        </div>
                        <!--  Right Sidebar  -->
                        <div class="col-md-2 text" style="position: fixed; top: 50px; z-index: 1; right: 0;">
                            <aside class="sidebar">
								<div class="col-xs-6 col-sm-3 padding-sm">
									<a href="#" class="btn-alt medium margin-null" style="padding-left: 15px; padding-right: 15px;" onclick="topFunction()" id="topBttn" title="Go to top">Top<i class="icon ion-ios-arrow-up"></i></a>
								</div>
                            </aside>
                        </div>
                        <!--  END Right Sidebar  -->
                        <div class="row margin-leftright-null">
                            <!--  Navigation  -->
                            <section id="nav" class="padding-top-null grey-background">
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="nav-left">
                                            <a href="single-blog-style-2.html" class="btn-alt small margin-null"><i class="icon ion-ios-arrow-up"></i><span>Older posts</span></a>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="nav-right">
                                            <a href="#" class="btn-alt small margin-null"><span>Newer posts</span><i class="icon ion-ios-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <!--  END Navigation  -->
                        </div>
                    </div>
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
            
            <!--  Footer. Class fixed for fixed footer  -->
            <footer class="fixed full-width">
                <div class="container">
                    <div class="row no-margin">
                        <div class="col-sm-4 col-md-2 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Dolomia</h6>
                            <ul class="sitemap">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Pages</a></li>
                                <li><a href="#">Portfolio</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Elements</a></li>
                                <li><a href="#">Contacts</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-2 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Useful Links</h6>
                            <ul class="useful-links">
                                <li><a href="#">FAQs</a></li>
                                <li><a href="#">Download Catalog</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Cookie Policy</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Contact Us</h6>
                            <ul class="info">
                                <li>Phone <a href="#">+39 123456789</a></li>
                                <li>Mail <a href="#">mail@domain.com</a></li>
                                <li>Monday to Friday <span class="white">9.00 am to 8.00 pm</span><br>Saturday from <span class="white">9.00 am to 12.00 pm</span></li>
                                <li><a href="#">322 Moon St, Venice<br>
                                    Italy, 1231</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4 padding-leftright-null">
                            <h6 class="heading white margin-bottom-extrasmall">Passionate About Nature</h6>
                            <p class="grey-light">Sign up for Dolomia mounthly newsletter and get to know more about our latest adventures and much mores...</p>
                            <div id="newsletter-form" class="padding-onlytop-xs">
                                <form class="search-form">
                                    <div class="form-input">
                                        <input type="text" placeholder="Your email ID">
                                        <span class="form-button">
                                            <button type="button">Sign Up</button>
                                        </span>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="copy">
                        <div class="row no-margin">
                            <div class="col-md-8 padding-leftright-null">
                                &copy; 2016 Dolomia -  Hiking &amp; Outdoor Html Template Handmade by <a href="http://www.patrickdavid.it/">puredesignThemes</a>
                            </div>
                            <div class="col-md-4 padding-leftright-null">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!--  END Footer. Class fixed for fixed footer  -->
        </div>
        <!--  Main Wrap  -->
        
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- All js library -->
        <script src="assets/js/bootstrap/bootstrap.min.js"></script>
        <script src="assets/js/jquery.flexslider-min.js"></script>
        <script src="assets/js/jquery.fullPage.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/isotope.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;signed_in=false"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="assets/js/smooth.scroll.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.countTo.js"></script>
        <script src="assets/js/jquery.scrolly.js"></script>
        <script src="assets/js/plugins-scroll.js"></script>
        <script src="assets/js/imagesloaded.min.js"></script>
        <script src="assets/js/pace.min.js"></script>
        <script src="assets/js/main.js"></script>
		<script>
			// When the user scrolls down 20px from the top of the document, show the button
			window.onscroll = function() {scrollFunction()};

			function scrollFunction() {
				downpx = 550;
				if (document.body.scrollTop > downpx || document.documentElement.scrollTop > downpx) {
					document.getElementById("topBttn").style.display = "block";
				} else {
					document.getElementById("topBttn").style.display = "none";
				}
			}
			function topFunction() {
				document.body.scrollTop = 0; // For Safari
				document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
			} 
		</script>
    </body>

<!-- Mirrored from wearepuredesign.com/dolomia/blog-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 19:49:10 GMT -->
</html>