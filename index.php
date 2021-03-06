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
$page_title = "NZ Blog | Home";
$page_level = "";
$page_type = "index";
include("header.php");
include("navigation.php");
?>
            <!--  END Header & Menu  -->
            
            <!--  Page Content, class footer-fixed if footer is fixed  -->
            <div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
                <div id="flexslider-nav" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/argonath.jpg)">
                            <div class="container text">
								<?php
									if($_SESSION['lang'] == 'hun') {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">Oda <br>s<br> vissza<br> </h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Kalandozas Uj-Zelandon</h2>';
									} else {
										echo '
										<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">There <br>&<br> back<br> </h1>
										<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">Exploreing New Zealand</h2>';
									}
								?>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <!-- <li style="background-image:url(assets/img/argonath.jpg)"> -->
                            <!-- <div class="text container"> -->
                                <!-- <h1 class="white flex-animation no-opacity">Wild nature<br> safe adventure</h1> -->
                                <!-- <h2 class="white flex-animation no-opacity">Lorem ipsum dolor sit amet, consectetur adipisicing elit. <br>Veniam, facilis.</h2> -->
                                <!-- <a href="#" class="shadow btn-alt small activetwo margin-bottom-null flex-animation no-opacity">More info</a> -->
                            <!-- </div> -->
                            <!-- <div class="gradient dark"></div> -->
                        <!-- </li> -->
                    </ul>
                    <!-- <div class="slider-navigation"> -->
                        <!-- <a href="#" class="flex-prev"><i class="icon ion-ios-arrow-thin-left"></i></a> -->
                        <!-- <div class="slider-controls-container"></div> -->
                        <!-- <a href="#" class="flex-next"><i class="icon ion-ios-arrow-thin-right"></i></a> -->
                    <!-- </div> -->
                </div>
                <!--  END Slider  -->
                <div id="home-wrap" class="content-section fullpage-wrap">
                    <!-- Section Clock -->
                    <div class="row margin-leftright-null">
                        <div class="container">
                            <div class="col-md-12 padding-leftright-null">
                                <div class="text text-center">
									<?php 
										if($_SESSION['lang'] == 'hun'){
											echo'
                                    <h2 class="margin-bottom-null title center">Már csak:</h2>
                                    <div class="padding-onlytop-md">
										<div id="clockdiv">
											<div>
											  <span class="days"></span>
											  <div class="smalltext">Nap</div>
											</div>
											<div>
											  <span class="hours"></span>
											  <div class="smalltext">Óra</div>
											</div>
											<div>
											  <span class="minutes"></span>
											  <div class="smalltext">Perc</div>
											</div>
											<div>
											  <span class="seconds"></span>
											  <div class="smalltext">Másodperc</div>
											</div>
										</div>
                                    </div>';
										}else{
											echo'
                                    <h2 class="margin-bottom-null title center">Time left:</h2>
                                    <div class="padding-onlytop-md">
										<div id="clockdiv">
											<div>
											  <span class="days"></span>
											  <div class="smalltext">Days</div>
											</div>
											<div>
											  <span class="hours"></span>
											  <div class="smalltext">Hours</div>
											</div>
											<div>
											  <span class="minutes"></span>
											  <div class="smalltext">Minutes</div>
											</div>
											<div>
											  <span class="seconds"></span>
											  <div class="smalltext">Seconds</div>
											</div>
										</div>
                                    </div>';
										}
									?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Section About -->
                    <!-- Statistics -->
					<?php 
						$alc = 0;
						$step = 0;
						$km = 0;
						if($rdb_connect){		
							try{
								$result = r\db('nz_database')->table('statistics')->filter(array('type' => 'steps'))->run($conn);
								foreach ($result as $doc){
									$step += $doc['value'];	
								}
							}catch (Exception $e) {
								$step = 'NaN';
							}
							try{
								$result = r\db('nz_database')->table('statistics')->filter(array('type' => 'alcohol'))->run($conn);
								foreach ($result as $doc){
									$alc += $doc['value'];	
								}
							}catch (Exception $e) {
								$alc = 'NaN';
							}
							try{
								$result = r\db('nz_database')->table('statistics')->filter(array('type' => 'drive'))->run($conn);
								foreach ($result as $doc){
									$km += $doc['value'];
								}
							}catch (Exception $e) {
								$km = 'NaN';
							}
						}
					?>
                    <div class="row no-margin text-center grey-background">
                        <div class="container">
                            <div class="col-md-12 padding-leftright-null">
                                <div class="col-md-4 padding-leftright-null">
                                    <div class="text padding-md-bottom-null">
                                        <i class="pd-icon-juice service margin-bottom-null"></i>
                                        <h6 class="heading margin-bottom-extrasmall"><?php if($_SESSION['lang']=='hun'){echo 'Pihenés';}else{echo 'Resting';}?></h6>
                                        <p class="margin-bottom-null"><?php if($_SESSION['lang']=='hun'){echo $alc.' Óra';}else{echo $alc.' Hours';}?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 padding-leftright-null">
                                    <div class="text padding-md-bottom-null">
                                        <i class="pd-icon-camp-bag service margin-bottom-null"></i>
                                        <h6 class="heading margin-bottom-extrasmall"><?php if($_SESSION['lang']=='hun'){echo 'Lépések';}else{echo 'Steps';}?></h6>
                                        <p class="margin-bottom-null"><?php if($_SESSION['lang']=='hun'){echo $step.' Lépés';}else{echo $step.' Steps';}?></p>
                                    </div>
                                </div>
                                <div class="col-md-4 padding-leftright-null">
                                    <div class="text">
                                        <i class="pd-icon-distance service margin-bottom-null"></i>
                                        <h6 class="heading  margin-bottom-extrasmall"><?php if($_SESSION['lang']=='hun'){echo 'Vezettünk';}else{echo 'Drove';}?></h6>
                                        <p class="margin-bottom-null"><?php if($_SESSION['lang']=='hun'){echo $km.' Kilométert';}else{echo $km.' Kilometer';}?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END Statistics -->
                    <!-- Carousel Gallery -->
					<div class="row padding-md padding-sm padding-leftright-null">
						<div class="container">
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home01.jpg" data-lightbox="home-set" data-title="">
											<img  src="assets/img/home01.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home06.jpg" data-lightbox="home-set" data-title="">
											<img src="assets/img/home06.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2 ">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home08.jpg" data-lightbox="home-set" data-title="">
											<img src="assets/img/home08.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2 ">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home09.jpg" data-lightbox="home-set" data-title="">
											<img  src="assets/img/home09.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2  ">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home10.jpg" data-lightbox="home-set" data-title="">
											<img  src="assets/img/home10.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
							<div class="col-xs-2 col-sm-2 col-lg-2 col-md-2 col-lg-2 col-xl-2  ">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/home11.jpg" data-lightbox="home-set" data-title="">
											<img  src="assets/img/home11.jpg" alt="" />
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
                    <!-- Carousel Gallery -->
                    <!-- Section Blog -->
					<?php 
						if($rdb_connect){
							try{
								$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->orderBy( r\desc('timestamp'))->run($conn);
								$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
								if($num>0){
									echo '
                    <div class="row margin-leftright-null grey-background">
                        <div class="container">
                            <div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
                                <h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
                                <p class="heading center grey margin-bottom-null"></p>
                            </div>
                            <div class="col-md-12 text" id="news">';
									$counter = 0;
									foreach ($result as $doc){
										if($counter >= 2) break;
										$counter += 1;
										echo'
                                <div class="col-sm-6 single-news horizontal-news">
                                    <article>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="image" style="background-image:url(assets/img/'.$doc['img'].')"></div>
                                        </div>
                                        <div class="col-md-6 padding-leftright-null">
                                            <div class="content">
                                                <h3>'.$doc['title'].'</h3>
                                                <span class="date">'.$doc['timestamp']->format('Y-m-d H').'</span>
                                                <p>'.$doc['sort_content'].'</p>
                                            </div>
                                        </div>
                                        <a href="blog.php?blog='.$doc['id'] .'" class="link"></a>
                                    </article>
                                </div>';									
									}
									echo'
							</div>
						</div>
					</div>';
								}else{
									echo '
                    <div class="row margin-leftright-null grey-background">
                        <div class="container">
                            <div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
                                <h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
                                <p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There are no articles yet';}echo'</p>
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
                                <p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg nincs blog bejegyzés';}else{echo'There are no articles';}echo'</p>
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
                                <p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg nincs blog bejegyzés';}else{echo'There are no articles';}echo'</p>
                            </div>
						</div>
					</div>';
						}
					?>
                    <!-- END Section Blog -->
					<!-- Section map -->
					<div class="row text-center margin-leftrisght-null">
						<div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
							<h2 class="margin-bottom-null title line center"><?php if($_SESSION['lang'] == 'hun'){echo'Terveink';}else{echo'Our Plans';}?></h2>
							<p class="heading center grey margin-bottom-null"></p>
							<iframe style="margin: 1.5em;" src="https://www.google.com/maps/d/u/0/embed?mid=1SDsH-Z3tqBYVnFWNxcessWuo8K0mX5uF" width=75% height=540></iframe>
						</div>
					</div>
					<!-- END Section Map -->
                    <!--  Section Image Background with overlay  -->
                    <div class="row margin-leftright-null grey-background">
                        <div class="bg-img overlay simple-parallax responsive" style="background-image:url(assets/img/home.jpg)">
                           <div class="container">
                               <!-- Testimonials -->
                               <section class="testimonials-carousel-simple col-md-12 text padding-bottom-null">
                                   <div class="item padding-leftright-null">
                                       <div class="padding-top-null padding-bottom-null">
                                           <blockquote class="margin-bottom-small white"><?php if($_SESSION['lang'] == 'hun'){echo'Veszélyes dolog kilépni az ajtón, Frodó. Csak rálépsz az Útra, és ha nem tartod féken a lábadat, már el is sodródtál, ki tudja, hová. ';}else{echo"It's a dangerous business, Frodo, going out your door. You step onto the road, and if you don't keep your feet, there's no knowing where you might be swept off to.";}?><em class="small grey-light">Bilbo</em></blockquote>
                                       </div>
                                   </div>
                                   <div class="item padding-leftright-null">
                                       <div class="padding-top-null padding-bottom-null">
                                           <blockquote class="margin-bottom-small white"><?php if($_SESSION['lang'] == 'hun'){echo'Veszélyes dolog kilépni az ajtón, Frodó. Csak rálépsz az Útra, és ha nem tartod féken a lábadat, már el is sodródtál, ki tudja, hová. ';}else{echo"It's a dangerous business, Frodo, going out your door. You step onto the road, and if you don't keep your feet, there's no knowing where you might be swept off to.";}?><em class="small grey-light">Bilbo</em></blockquote>
                                       </div>
                                   </div>
                               </section>
                               <!-- END Testimonials -->
                           </div>
                        </div>
                    </div>
                    <!--  END Section Image Background with overlay  -->
                    <!--  Team  -->
                    <div id="team">
                       <div class="container text">
                           <div class="row">
                               <div class="col-md-12 padding-leftright-null padding-onlybottom-md text-center">
                                   <h2 class="margin-bottom-null title line center"><?php if($_SESSION['lang'] == 'hun'){echo'Egy kicsit magunkról';}else{echo'A bit about us';}?></h2>
                                   <p class="heading center grey margin-bottom-null"><?php if($_SESSION['lang'] == 'hun'){echo'A 4 kalandor';}else{echo'The 4 explorers';}?></p>
                               </div>
                               <div class="col-md-3 single-person">
                                   <div class="content" >
                                       <img src="assets/img/balintczucz.jpg" alt="BC">
                                       <ul class="social">
                                           <li><a href="https://instagram.com/balintczucz"><i class="icon ion-social-instagram"></i></a></li>
                                           <li><a href="https://www.youtube.com/channel/UCm_j1KDKKAywYH-PJ1XE4HA/"><i class="fa fa-youtube-play"></i></a></li>
                                       </ul>
                                   </div>
								   <a href="contact.php">
									   <div class="description text-center">
										   <h5><?php if($_SESSION['lang'] == 'hun'){echo'Czucz Bálint';}else{echo'Bálint Czucz';}?></h5>
									   </div>
									</a>
                               </div>
                               <div class="col-md-3 single-person">
                                   <div class="content">
                                       <img src="assets/img/andraskovach.jpg" alt="AK">
                                       <ul class="social">
                                           <li><a href="https://instagram.com/andras.kovach"><i class="icon ion-social-instagram"></i></a></li>
                                           <li><a href="https://www.youtube.com/channel/UCm_j1KDKKAywYH-PJ1XE4HA/"><i class="fa fa-youtube-play"></i></a></li>
                                       </ul>
                                   </div>
								   <a href="contact.php">
									   <div class="description text-center">
										   <h5><?php if($_SESSION['lang'] == 'hun'){echo'Kovách András';}else{echo'András Kovách';}?></h5>
									   </div>
									</a>
                               </div>
                               <div class="col-md-3 single-person">
                                   <div class="content">
                                       <img src="assets/img/tamaskovach.jpg" alt="TK">
                                       <ul class="social">
                                           <li><a href="https://www.youtube.com/channel/UCm_j1KDKKAywYH-PJ1XE4HA/"><i class="fa fa-youtube-play"></i></a></li>
                                       </ul>
                                   </div>
								   <a href="contact.php">
									   <div class="description text-center">
										   <h5><?php if($_SESSION['lang'] == 'hun'){echo'Kovách Tamás';}else{echo'Tamás Kovách';}?></h5>
									   </div>
									</a>
                               </div>
                               <div class="col-md-3 single-person">
                                   <div class="content">
										<img src="assets/img/peterkovach.jpg" alt="PK">
                                       <ul class="social">
                                           <li><a href="https://www.youtube.com/channel/UCm_j1KDKKAywYH-PJ1XE4HA/"><i class="fa fa-youtube-play"></i></a></li>
                                       </ul>
                                   </div>
								   <a href="contact.php">
									   <div class="description text-center">
										   <h5><?php if($_SESSION['lang'] == 'hun'){echo'Kovách Péter';}else{echo'Péter Kovách';}?></h5>
									   </div>
									</a>
                               </div>
                           </div>
                       </div>
                    </div>
                    <!--  END Team  -->

                    <!--  Sponsor  -->
					<div class="row text-center margin-leftrisght-null grey-background">
						<div class="col-md-12 padding-leftright-null text text-center">
						   <h2 class="margin-bottom-null title line center"><?php if($_SESSION['lang'] == 'hun'){echo'Támogatóink';}else{echo'Our Sponsors';}?></h2>
						   <p class="heading center grey margin-bottom-null"><?php if($_SESSION['lang'] == 'hun'){echo'Egyenlőre még nincsen támogatónk, legyen Ön az első! :)';}else{echo'It is lonely here, be the first one how is supporting us! :)';}?></p>
					   </div>
				   </div>
                    <div class="row no-margin">
                        <div class="container text">
                            <div class="col-md-12 sponsor-carousel padding-leftright-null">
                                <div class="item" >
                                    <img class="center" href="https://lowealpine.com" src="assets/img/lowealpine.png" alt="client logo">
                                </div><!--
                                <div class="item">
                                    <img class="center" src="assets/img/sponsor2.png" alt="client logo">
                                </div>
                                <div class="item">
                                    <img class="center" src="assets/img/sponsor3.png" alt="client logo">
                                </div>
                                <div class="item">
                                    <img class="center" src="assets/img/sponsor4.png" alt="client logo">
                                </div>-->
                            </div>
                        </div>
                    </div>
                    <!--  Sponsor  -->
                </div>
            </div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
<?php
	require_once('footer.php')
?>

</html>