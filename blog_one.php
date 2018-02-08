			<div id="page-content" class="header-static footer-fixed">
                <!--  Slider  -->
				<?php
					try{
						if($rdb_connect){
							$result = r\db('nz_database')->table('blogs')->get($_GET['blog'])->run($conn);
							if($result == null){
								header("Location:blog.php");
							}
							$helper = r\db('nz_database')->table('blogs')->filter(array('language' => $result['language']))->run($conn);
							$next = "nan";
							$previous = "nan";
							$found = False;
							foreach($helper as $doc){
								if($doc['id'] == $result['id']){
									$found = True;
								}else{
									if(!$found) {$previous = $doc['id'];}
									if($found) {
										$next = $doc['id'];
										break;
									}
								}
							}
						}
					}catch (Exception $e){}
				?>
                <div id="flexslider" class="fullpage-wrap small">
                    <ul class="slides">
                        <li style="background-image:url(assets/img/<?php echo $result['img'];?>)">
                            <div class="container text text-center">
                                <?php
									echo '
								<h1 class="white flex-animation" style="font-family:lotr;font-size:110px;">'.$result['title'].'<br></h1>
								<h2 class="white flex-animation" style="font-family:lotr;font-size:35px;">'.$result['subtitle'].'</h2>';
								?>
                            </div>
                            <div class="gradient dark"></div>
                        </li>
                        <ol class="breadcrumb">
                            <li class="active"><?php echo $result['timestamp']->format('Y-m-d H');?></li>
                        </ol>
                    </ul>
                </div>
                <!--  END Slider  -->

				<div id="post-wrap" class="content-section fullpage-wrap">
                    <div class="row margin-leftright-null">
                        <div class="container text">
                            <div class="row content-post no-margin">
                                <!--  Post Meta  -->
                                <!--  END Post Meta  -->
                                <div class="col-md-12 padding-onlytop-md padding-leftright-null">
                                    <?php echo $result['content'];?>
								</div>
                            </div>
                        </div>
					</div>
					<div class="row margin-leftright-null">
						<!--  Navigation  -->
						<section id="nav" class="padding-top-null ">
							<div class="row">
								<?php
								if($previous != 'nan'){
									echo'
								<div class="col-xs-6">
									<div class="nav-left">
										<a href="blog.php?blog='.$previous.'" class="btn-alt small margin-null"><i class="icon ion-ios-arrow-left"></i><span>';if($_SESSION['lang']=='hun'){echo'Előző';}else{echo'Previous';}echo'</span></a>
									</div>
								</div>';
								}else{
									echo'
									<div class="col-xs-6">
									</div>';
								}
								if($next != 'nan'){
									echo'
								
								<div class="col-xs-6">
									<div class="nav-right">
										<a href="blog.php?blog='.$next.'" class="btn-alt small margin-null"><span>';if($_SESSION['lang']=='hun'){echo'Következő';}else{echo'Next';}echo'</span><i class="icon ion-ios-arrow-right"></i></a>
									</div>
								</div>';
								}?>
							</div>
						</section>
						<!--  END Navigation  -->
					</div>
					<section id="gallery" data-isotope="load-simple">
                        <div class=" gallery-carousel masonry-items equal five-columns">
                            <!--  Lightbox trek -->
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip1.jpg)"></div>
                                <div class="content figure">	
                                    <a href="assets/img/trip1.jpg" class="link lightbox"></a>
                                </div>
                            </div>
                            <!--  END Lightbox trek -->
                            <!--  Page Trek  -->
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip2.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-distance"></i>
                                    <a href="single-trek.html" class="link lightbox"></a>
                                </div>
                            </div>
                            <!--  END Page Trek  -->
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip3.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-camera"></i>
                                    <a href="assets/img/trip3.jpg" class="link lightbox"></a>
                                </div>
                            </div>
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip4.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-distance"></i>
                                    <a href="single-trek-2.html" class="link"></a>
                                </div>
                            </div>
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip5.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-camera"></i>
                                    <a href="assets/img/trip5.jpg" class="link lightbox"></a>
                                </div>
                            </div>
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip6.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-camera"></i>
                                    <a href="assets/img/trip6.jpg" class="link lightbox"></a>
                                </div>
                            </div>
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip7.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-distance"></i>
                                    <a href="single-trek-2.html" class="link"></a>
                                </div>
                            </div>
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip8.jpg)"></div>
                                <div class="content figure">
                                    <i class="pd-icon-camera"></i>
                                    <a href="assets/img/trip8.jpg" class="link lightbox"></a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <!-- Project Slider -->
                    <div class="row margin-leftright-null padding-sm">
                        <div class="gallery-carousel" id="gallery" data-isotope="load-simple">
                            <div class="masonry-items equal">
                            <div class="one-item" style="padding: 2px;">
                                <div class="image-bg" style="background-image:url(assets/img/trip8.jpg)"></div>
									<div class="content figure">
										<i class="pd-icon-camera"></i>
										<a href="assets/img/trip8.jpg" class="link lightbox"></a>
									</div>
								</div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip6-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip7-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip8-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip9-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip10-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip11-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip12-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip2-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip8-small.jpg)"></div>
                            </div>
                            <div class="item">
                                <div class="image" style="background-image:url(assets/img/trip9-small.jpg)"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Project Slider -->
				</div>
			</div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->