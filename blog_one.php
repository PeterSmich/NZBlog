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
					<div class="row padding-md padding-xs padding-leftright-null grey-background">
						<div class="container">
							<?php
								$img_result = r\db('nz_database')->table('images')->filter(array('globaltag'=>$result['images'])->run($conn);	
								foreach($img_result as $img){
										echo'
							<div class="col-md-3 col-lg-3 col-xs-4 margin-leftright-null margin-bottom">
								<div class="equal_size_img_yolo_kecske_turosbukta">
									<div class="equal_size_img_yolo_kecske_turosbukta_div" >
										<a class="example-image-link" href="assets/img/'.$img['id'].'" data-lightbox="'.$img['globaltag'].'" data-title="'.$img['description'].'">
											<img  src="assets/img/'.$img['id'].'" alt="" />
										</a>
									</div>
								</div>
							</div>
										';
									}
								}
							?>
						</div>
					</div>
					<div class="row  padding-md padding-xs padding-leftright-null">
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
				</div>
			</div>
            <!--  END Page Content, class footer-fixed if footer is fixed  -->