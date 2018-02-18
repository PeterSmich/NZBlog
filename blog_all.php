            
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
                <!--  END Slider  -->
				<?php
				
				function removeAccents($str) {
				  $a = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', 'Ā', 'ā', 'Ă', 'ă', 'Ą', 'ą', 'Ć', 'ć', 'Ĉ', 'ĉ', 'Ċ', 'ċ', 'Č', 'č', 'Ď', 'ď', 'Đ', 'đ', 'Ē', 'ē', 'Ĕ', 'ĕ', 'Ė', 'ė', 'Ę', 'ę', 'Ě', 'ě', 'Ĝ', 'ĝ', 'Ğ', 'ğ', 'Ġ', 'ġ', 'Ģ', 'ģ', 'Ĥ', 'ĥ', 'Ħ', 'ħ', 'Ĩ', 'ĩ', 'Ī', 'ī', 'Ĭ', 'ĭ', 'Į', 'į', 'İ', 'ı', 'Ĳ', 'ĳ', 'Ĵ', 'ĵ', 'Ķ', 'ķ', 'Ĺ', 'ĺ', 'Ļ', 'ļ', 'Ľ', 'ľ', 'Ŀ', 'ŀ', 'Ł', 'ł', 'Ń', 'ń', 'Ņ', 'ņ', 'Ň', 'ň', 'ŉ', 'Ō', 'ō', 'Ŏ', 'ŏ', 'Ő', 'ő', 'Œ', 'œ', 'Ŕ', 'ŕ', 'Ŗ', 'ŗ', 'Ř', 'ř', 'Ś', 'ś', 'Ŝ', 'ŝ', 'Ş', 'ş', 'Š', 'š', 'Ţ', 'ţ', 'Ť', 'ť', 'Ŧ', 'ŧ', 'Ũ', 'ũ', 'Ū', 'ū', 'Ŭ', 'ŭ', 'Ů', 'ů', 'Ű', 'ű', 'Ų', 'ų', 'Ŵ', 'ŵ', 'Ŷ', 'ŷ', 'Ÿ', 'Ź', 'ź', 'Ż', 'ż', 'Ž', 'ž', 'ſ', 'ƒ', 'Ơ', 'ơ', 'Ư', 'ư', 'Ǎ', 'ǎ', 'Ǐ', 'ǐ', 'Ǒ', 'ǒ', 'Ǔ', 'ǔ', 'Ǖ', 'ǖ', 'Ǘ', 'ǘ', 'Ǚ', 'ǚ', 'Ǜ', 'ǜ', 'Ǻ', 'ǻ', 'Ǽ', 'ǽ', 'Ǿ', 'ǿ', 'Ά', 'ά', 'Έ', 'έ', 'Ό', 'ό', 'Ώ', 'ώ', 'Ί', 'ί', 'ϊ', 'ΐ', 'Ύ', 'ύ', 'ϋ', 'ΰ', 'Ή', 'ή');
				  $b = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', 'Α', 'α', 'Ε', 'ε', 'Ο', 'ο', 'Ω', 'ω', 'Ι', 'ι', 'ι', 'ι', 'Υ', 'υ', 'υ', 'υ', 'Η', 'η');
				  return str_replace($a, $b, $str);
				}
					try{
						if($rdb_connect){
							$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->run($conn);
							$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
							if(isset($_GET['search'])){
								if($_GET['search'] != ''){
									$searched = [];
									$search = removeAccents($_GET['search']);
									foreach($result as $doc){
										if((stripos(removeAccents($doc['title']), $search) !== false) or (stripos(removeAccents($doc['subtitle']), $search) !== false) or (stripos(removeAccents($doc['content']), $search) !== false)){
											array_push($searched,$doc);
										}
									}
									$result = $searched;
								}else{
									unset($_GET['search']);
								}
							}
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
								<div class="col-md-9 padding-leftright-null text padding-bottom-null text-center" id="filters">
									<ul class="filters ">
										<li data-filter="*" class="is-checked" style="height: 0.5px; padding: 0px 12px; line-height: 30px; margin-bottom: 12px; margin-top: 3px;" onclick="filterMonths('all')"><?php if($_SESSION['lang']=='hun'){echo'Összes';}else{echo'All';} ?></li>
										<?php
											if($rdb_connect and $num >0){
												$honapok = array("January"=>"Január","February"=>"Február","March"=>"Március","April"=>"Április","May"=>"MÁjus","June"=>"Június","July"=>"Július","August"=>"Augusztus","September"=>"Szeptember","October"=>"Október","November"=>"November","December"=>"December");
												$months = array();
												$years = array();
												foreach ($result as $doc){
													$month = $doc['timestamp']->format('F');
													$year = $doc['timestamp']->format('Y');
													if (!in_array($year, $years)){ 
														echo'<li data-filter="'.$year.'" style="height: 0.5px; padding: 0px 12px; line-height: 30px; margin-bottom: 12px; margin-top: 3px;" onclick="filterMonths('."'".$year."'".', 1)">'.$year.':</li>';
													array_push($years,$year);
													}
													if (!in_array($month, $months)){ 
														echo'<li data-filter="'.$month.'" style="height: 0.5px; padding: 0px 12px; line-height: 30px; margin-bottom: 12px; margin-top: 3px;" onclick="filterMonths('."'".$month."'".', 0)">';if($_SESSION['lang']=='hun'){echo $honapok[$month];}else{echo $month;} echo'</li>';
													array_push($months,$month);
													}
												}
												$jsonm = json_encode($months);
												$jsony = json_encode($years);
											}
										?>										
									</ul>
								</div>
								<div class="col-md-3 padding-leftright-null text padding-bottom-null" style="text-align: center;">
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
                <div id="home-wrap" class="content-section fullpage-wrap " >
					<div class="row margin-leftrisght-null grey-background">
						<div class="container">
							<div class="col-md-12 margin-leftright-null">
								<!--  News Section  -->
								<section id="news" class="page">
									<?php 
										if($rdb_connect){
											if(!isset($_GET['search'])){
												$result = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->orderBy( r\desc('timestamp'))->run($conn);
												$num = r\db('nz_database')->table('blogs')->filter(array('language' => $_SESSION['lang']))->count()->run($conn);
											}
											try{											
												if($num>0){
													echo'
									<div class="news-items equal one-columns" id="blogWrapper">';
													foreach ($result as $doc){
														echo'
										<div class="single-news one-item horizontal-news '.$doc['timestamp']->format('F').' '.$doc['timestamp']->format('Y').'" style="display: static !important;">
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
												<a href="blog.php?blog='.$doc['id'] .'" class="link"></a>
											</article>
										</div>';
													}
													echo'
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
												echo $e.' 
										<div class="row margin-leftright-null grey-background">
											<div class="container">
												<div class="col-md-12 padding-leftright-null text padding-bottom-null text-center">
													<h2 class="margin-bottom-null title line center">';if($_SESSION['lang']=='hun'){echo'Legfirssebb bejegyzések';}else{echo'Recent articles';}echo'</h2>
													<p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There are no articles yet';}echo'</p>
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
													<p class="heading center grey">';if($_SESSION['lang']=='hun'){echo'Jelenleg még nincs blog bejegyzés';}else{echo'There are no articles yet';}echo'</p>
												</div>
											</div>
										</div>
';
										}
									?>
								</section>
								<!--  END News Section  -->
							</div>
						</div>
					</div>
				</div>
			</div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->
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
				
				function hideElement(){
					if(screen.width < 992  || window.innerWidth < 992){
						document.getElementById("filters").style.display = "none";
					}
				}
				
				function scrollFunction() {				
					
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
				
				function filterMonths(filter, sw){
					if(sw == 0){
						var months = <?php if($jsonm==''){echo'[]';}else{echo $jsonm; }?>;
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
						var years = <?php if($jsony==''){echo'[]';}else{echo $jsony; }?>;
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