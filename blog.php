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
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">Egyszer volt,<br><br> hol nemvolt<br></h1>
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
				<?php
					try{
						if($rdb_connect){
							$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->run($conn);
							$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
						}else{
							$num = 0;
						}
					}catch (Exception $e){}
				?>
				<section id="masonry-filters">
					<!--  Filters  -->
					<div class="fixed transparent fullpage-wrap" id="filterStrip" style="z-index: 2;" >
						<div class="row margin-leftright-null" style="box-shadow: 0px 2px 5px grey;">
							<div class="container" >
								<div class="col-md-10 padding-leftright-null text padding-bottom-null text-center" id="filters">
									<ul class="filters ">
										<li data-filter="*" class="is-checked" style="height: 0.5px; padding: 0px 12px; line-height: 30px; margin-bottom: 12px; margin-top: 3px;" onclick="filterMonths('all')"><?php if($_SESSION['lang']=='hun'){echo'Összes';}else{echo'All';} ?></li>
										<?php
											if($rdb_connect and $num >0){
												$honapok = array("January"=>"Január","February"=>"Február","March"=>"Március","April"=>"Április","May"=>"Május","June"=>"Június","July"=>"Július","August"=>"Augusztus","September"=>"Szeptember","October"=>"Október","November"=>"November","December"=>"December");
												$months = array();
												foreach ($result as $doc){
													$month = $doc['timestamp']->format('F');
													if (!in_array($month, $months)){ 
														echo'<li data-filter="'.$month.'" style="height: 0.5px; padding: 0px 12px; line-height: 30px; margin-bottom: 12px; margin-top: 3px;" onclick="filterMonths('."'".$month."'".')">';if($_SESSION['lang']=='hun'){echo $honapok[$month];}else{echo $month;} echo'</li>';
													array_push($months,$month);
													}
												}
												$json = json_encode($months);
											}
										?>										
									</ul>
								</div>
								<div class="col-md-2 padding-leftright-null text padding-bottom-null" style="text-align: center;">
									<div class="widget-wrapper" style="text-align: right; width:130px; display: inline-block; padding-top: 2px">
										<form class="search-form" style=" width:130px; background: #CBBD9A; border-radius: 5px; text-align: center;">
											<div class="form-input">
												<input type="text" placeholder=<?php if($_SESSION['lang']=='hun'){echo'Keresés... ';}else{echo'Search... ';}?>style="width: 100px; height:25px; border-radius: 5px;">
												<span class="form-button">
													<button type="button">
														<i class="icon ion-ios-search-strong" ></i>
													</button>
												</span>
											</div>
										</form>
									</div>
									<div style="line-height: 30px; display: inline-block;padding-top: 2px; padding-bottom: 2px;">
										<button  style="border-radius: 5px; background:#CBBD9A; height: 30px; width: 130px; padding-top: 0px;" onclick="topFunction()" id="topBttn" ><?php if($_SESSION['lang'] == 'hun'){echo'Tetejére';}else{echo'Top';}?></button>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--  END Filters  -->
				</section>
                <div id="home-wrap" class="content-section fullpage-wrap row grey-background" >
                    <div class="container">
                        <div class="col-md-11 padding-leftright-null">
                            <!--  News Section  -->
                            <section id="news" class="page">
                                <div class="news-items equal one-columns" id="blogWrapper">
								<?php 
									if($rdb_connect){
										try{											
											$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->run($conn);
											$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
											if($num>0){
												foreach ($result as $doc){
													echo'
                                    <div class="single-news one-item horizontal-news '.$doc['timestamp']->format('F').'" style="display: static !important;">
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
                    </div>
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
<?php
	require_once('footer.php')
?>

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

			function scrollFunction() {				
				if(screen.width < 902){
					document.getElementById("filters").style.display = "none";
				}
				var pd = getStyle(document.getElementById("filterStrip"), "height");
				var tp = getStyle(document.getElementById("header"), "height");
				var height = parseInt((getStyle(document.getElementById("flexslider"), "height").match(/\d+/)[0]))-parseInt(tp.match(/\d+/)[0]);
				if (document.body.scrollTop > height || document.documentElement.scrollTop > height) {
					document.getElementById("filterStrip").style.position = "fixed";
					document.getElementById("filterStrip").style.top = tp;
					document.getElementById("filterStrip").style.width = "100%";
					document.getElementById("filterStrip").style.zIndex = "2";
					document.getElementById("home-wrap").style.paddingTop = pd;
				} else {
					document.getElementById("filterStrip").style = document.getElementById("filterStrip").style;
					document.getElementById("filterStrip").style.zIndex = "2";
					document.getElementById("home-wrap").style.paddingTop = "0px";
				}
			}
			function topFunction() {
				// document.body.scrollTop = 0; // For Safari
				// document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
				 $("html, body").animate({
					scrollTop: $("#home-wrap").offset().top -parseInt((getStyle(document.getElementById("header"), "height").match(/\d+/)[0]))
				});
			} 
			
			function filterMonths(month){
				console.log(month);
				var months = <?php echo $json; ?>;
				if (month == 'all'){
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
					e = document.getElementsByClassName(month);
					for(i=0; i<e.length; i++) {
						e[i].style.display = "block";
							e[i].style.position = "static";
							document.getElementById("blogWrapper").style.height = "auto";
					}
				}
			}
		</script>
<!-- Mirrored from wearepuredesign.com/dolomia/blog-classic.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2018 19:49:10 GMT -->
</html>