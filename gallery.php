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
			<div id="page-content" class="header-static footer-fixed">
				<!--  Slider  -->
				<div id="flexslider" class="fullpage-wrap small">
					<ul class="slides">
						<li style="background-image:url(assets/img/blog1.jpeg)">
							<div class="container text text-center">
								<?php
									if($_SESSION['lang'] == 'hun') {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">Egyszer volt,<br><br> hol nem volt<br></h1>
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
				<section id="masonry-filters">
					<!--  Filters  -->
					<div class="fixed transparent fullpage-wrap" id="filterStrip" style="z-index: 2;" >
						<div class="row margin-leftright-null" style="box-shadow: 0px 2px 5px grey;">
							<div class="container" >
								<div class="col-md-12 padding-leftright-null text padding-bottom-null" style="text-align: center;">
									<div class="widget-wrapper" style="text-align: right; width:130px; display: inline-block; padding-top: 2px">
										<form class="search-form" style=" width:130px; background: #CBBD9A; border-radius: 2px; text-align: center;">
											<div class="form-input">
												<input type="text" name="search" placeholder=<?php if($_SESSION['lang']=='hun'){echo'Keresés... ';}else{echo'Search... ';}?>style="width: 100px; height:25px; border-radius: 2px;" value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>">
												<span class="form-button">
													<button type="submit">
														<i class="icon ion-ios-search-strong" ></i>
													</button>
												</span>
											</div>
										</form>
									</div>
									<div style="line-height: 30px; display: inline-block;padding-top: 2px; padding-bottom: 2px;">
										<button  style="border-radius: 2px; background:#CBBD9A; height: 30px; width: 130px; padding-top: 0px;" onclick="topFunction()" id="topBttn" ><?php if($_SESSION['lang'] == 'hun'){echo'Tetejére';}else{echo'Top';}?></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--  END Filters  -->
				</section>
				<div id="home-wrap" class="content-section fullpage-wrap row">
					<div class="container">
						<div class="col-md-4 text" id="sidewraper" style="padding-left: 0;">
							<div id="sidebar">
								<aside class="sidebar">
									<div class="widget-wrapper">
										<form class="search-form">
											<div class="form-input">
												<input type="text" placeholder="Search...">
												<span class="form-button">
													<button type="button">
														<i class="icon ion-ios-search-strong"></i>
													</button>
												</span>
											</div>
										</form>
									</div>
									<div class="widget-wrapper">
										<h5>Categories</h5>
										<?php
											$result = r\db('nz_database')->table('images')->group('globaltag')->run($conn);
										echo'<ul class="widget-categories">
										';
											foreach($result['data'] as $res){
												echo'<li><nav><a href="#'.$res[0].'">'.$res[0].'</a></nav></li>
												';
											}
										echo'</ul>';
										?>
									</div>
									<div class="widget-wrapper">
										<h5>Recent Post</h5>
										<ul class="recent-posts">
											<li>
												<img src="assets/img/trip1.jpg" alt="">
												<div class="content">
													<a href="#">
														<span class="meta">
															February 12, 2016
														</span>
														<p>Post with Sidebar</p>
													</a>
												</div>
											</li>
											<li>
												<img src="assets/img/trip2.jpg" alt="">
												<div class="content">
													<a href="#">
														<span class="meta">
															February 12, 2016
														</span>
														<p>Post with Video</p>
													</a>
												</div>
											</li>
											<li>
												<img src="assets/img/trip3.jpg" alt="">
												<div class="content">
													<a href="#">
														<span class="meta">
															February 12, 2016
														</span>
														<p>Post with Audio</p>
													</a>
												</div>
											</li>
											<li>
												<img src="assets/img/trip4.jpg" alt="">
												<div class="content">
													<a href="#">
														<span class="meta">
															February 12, 2016
														</span>
														<p>Post with Gallery</p>
													</a>
												</div>
											</li>
										</ul>
									</div>
								</aside>
							</div>
						</div>
						<div class="col-md-8 padding-leftright-null" id="contentBody" >
							<?php
								foreach($result['data'] as $res){
									$img_result = r\db('nz_database')->table('images')->filter(array('globaltag' => $res[0]))->run($conn);
									echo'
							<div class="row margin-leftright-null margin-bottom" id="'.$res[0].'">
                            <div class="col-md-12 padding-leftright-null text padding-bottom text-center id="'.$res[0].'">
                                <h2 class="margin-bottom-null title line center">'.$res[0].'</h2>
                                <p class="heading center grey margin-bottom-null"></p>
                            </div>';
									foreach($img_result as $img){
										echo'
							<div class="col-md-3 col-lg-3 col-xs-4">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/'.$img['id'].'" data-lightbox="'.$img['globaltag'].'" data-title="'.$img['description'].'">
											<img  src="assets/img/'.$img['id'].'" alt="" />
										</a>
									</div>
								</div>
							</div>';
									}
									echo'</div>';
								}
							?>
						</div>
					</div>
				</div>
			</div>
			<script>
				// When the user scrolls down 20px from the top of the document, show the button
				function getStyle(el, styleProp) {
				  var value, defaultView = (el.ownerDocument || document).defaultView;
				  // W3C standard way:
				  if (defaultView && defaultView.getComputedStyle) {
					// sanitize property name to css notation
					// (hypen separated words eg. font-Size)
					styleProp = styleProp.replace(/([A-Z])/g, "-$1").toLowerCase();
					return defaultView.getComputedStyle(el, null).getPropertyValue(styleProp);
				  } else if (el.currentStyle) { // IE
					// sanitize property name to camelCase
					styleProp = styleProp.replace(/\-(\w)/g, function(str, letter) {
					  return letter.toUpperCase();
					});
					value = el.currentStyle[styleProp];
					// convert other units to pixels on IE
					if (/^\d+(em|pt|%|ex)?$/i.test(value)) { 
					  return (function(value) {
						var oldLeft = el.style.left, oldRsLeft = el.runtimeStyle.left;
						el.runtimeStyle.left = el.currentStyle.left;
						el.style.left = value || 0;
						value = el.style.pixelLeft + "px";
						el.style.left = oldLeft;
						el.runtimeStyle.left = oldRsLeft;
						return value;
					  })(value);
					}
					return value;
				  }
				}
				window.onscroll = function() {scrollFunction()};
				window.onload = hideElement;
				window.onresize = hideElement;
				function hideElement(){
					if(screen.width < 992 || window.innerWidth < 992){
						document.getElementById("filterStrip").style.display = "block";
						document.getElementById("sidebar").style = document.getElementById("sidebar").style;
					}else{
						document.getElementById("filterStrip").style.display = "none";
					}
				}
				
				function scrollFunction() {		
					var pd = getStyle(document.getElementById("filterStrip"), "height");
					var tp = getStyle(document.getElementById("header"), "height");
					var height = parseInt((getStyle(document.getElementById("flexslider"), "height").match(/\d+/)[0]))-parseInt(tp.match(/\d+/)[0]);
					var footerHeight = parseInt((getStyle(document.getElementById("footerID"), "height").match(/\d+/)[0]))-parseInt(tp.match(/\d+/)[0]);
					var bodyheight = parseInt(getStyle(document.getElementById("contentBody"),"height").match(/\d+/)[0]);
					var pagecontent = parseInt(getStyle(document.getElementById("page-content"),"height").match(/\d+/)[0]);
					var siderheight = parseInt(getStyle(document.getElementById("sidebar"),"height").match(/\d+/)[0]);
					
					if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
						if(screen.width >= 992 && window.innerWidth >= 992){
							if(bodyheight > screen.height){
								if (document.body.scrollTop > bodyheight+height-siderheight || document.documentElement.scrollTop > bodyheight+height-siderheight) {
									document.getElementById("sidebar").style.position = "absolute";
									document.getElementById("sidebar").style.top = (bodyheight-siderheight).toString()+"px";
									
								}else{ 
									document.getElementById("sidebar").style.position = "fixed";
									document.getElementById("sidebar").style.width = (parseInt(getStyle(document.getElementById("sidewraper"),"width").match(/\d+/)[0])-50).toString()+"px";
									document.getElementById("sidebar").style.top = (parseInt(tp.match(/\d+/)[0])+50).toString()+"px";
									document.getElementById("sidebar").style.zIndex = "2";
									document.getElementById("home-wrap").style.paddingTop = pd;
								}
							}
						}else{
							document.getElementById("filterStrip").style.position = "fixed";
							document.getElementById("filterStrip").style.top = tp;
							document.getElementById("filterStrip").style.width = "100%";
							document.getElementById("filterStrip").style.zIndex = "2";
							document.getElementById("home-wrap").style.paddingTop = pd;
						}
					} else {
						if(screen.width >= 992 && window.innerWidth >= 992){
							document.getElementById("sidebar").style = document.getElementById("sidebar").style;
							document.getElementById("sidebar").style.zIndex = "2";
						}else{
							document.getElementById("filterStrip").style = document.getElementById("filterStrip").style;
							document.getElementById("filterStrip").style.zIndex = "2";
						}
						document.getElementById("home-wrap").style.paddingTop = "0px";
					}
				}
				function topFunction() {
					 //document.body.scrollTop = 0; // For Safari
					 //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
					 $("html, body").animate({
						scrollTop: $("#home-wrap").offset().top -parseInt((getStyle(document.getElementById("header"), "height").match(/\d+/)[0]))
					});
				} 
				function goTo(gohere) {
					 //document.body.scrollTop = 0; // For Safari
					 //document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
					 $("html, body").animate({
						scrollTop: $(here).offset().top
					});
				} 
				$("nav").find("a").click(function(e) {
					e.preventDefault();
					var section = $(this).attr("href");
					console.log("ok");
					$("html, body").animate({
						scrollTop: $(section).offset().top
					});
				});
				
				function filterMonths(filter, sw){
					if(sw == 0){
						var months;
						if (filter == 'all'){
							for(m in months){
								var e = document.getElementsByClassName(months[m]);
								for(i=0; i<e.length; i++) {
									e[i].style.display = "block";
									document.getElementById("blogWrapper").style.height = "auto";
								}
							}
						}else{
							for(m in months){
								var e = document.getElementsByClassName(months[m]);
								for(i=0; i<e.length; i++) {
									e[i].style.display = "none";
									e[i].style.position = "static";
									document.getElementById("blogWrapper").style.height = "auto";
								}
							}
							e = document.getElementsByClassName(filter);
							for(i=0; i<e.length; i++) {
								e[i].style.display = "block";
									e[i].style.position = "static";
									document.getElementById("blogWrapper").style.height = "auto";
							}
						}
					}else{
						var years ;
						if (filter == 'all'){
							for(y in years){
								var e = document.getElementsByClassName(years[y]);
								for(i=0; i<e.length; i++) {
									e[i].style.display = "block";
									document.getElementById("blogWrapper").style.height = "auto";
								}
							}
						}else{
							for(y in years){
								var e = document.getElementsByClassName(years[y]);
								for(i=0; i<e.length; i++) {
									e[i].style.display = "none";
									e[i].style.position = "static";
									document.getElementById("blogWrapper").style.height = "auto";
								}
							}
							e = document.getElementsByClassName(filter);
							for(i=0; i<e.length; i++) {
								e[i].style.display = "block";
									e[i].style.position = "static";
									document.getElementById("blogWrapper").style.height = "auto";
							}
						}
					}
				}
			</script>
<?php
	require_once('footer.php')
?>

</html>