    <body>
      
        <!--  loader  -->
        <!-- <div id="myloader"> -->
            <!-- <span class="loader"> -->
                <!-- <div class="inner-loader"></div> -->
            <!-- </span> -->
        <!-- </div> -->
        
        <!--  Main Wrap  -->
        <div id="main-wrap" class="full-width">
            <!--  Header & Menu  -->
            <header id="header" class="fixed transparent full-width">
                <div class="container">
                    <nav class="navbar navbar-default white">
                        <!--  Header Logo  -->
                        <div id="logo">
                            <a class="navbar-brand" href="index.html">
                                <img src="assets/img/logo.png" class="normal" alt="logo">
                                <img src="assets/img/logo%402x.png" class="retina" alt="logo">
                                <img src="assets/img/logo_white.png" class="normal white-logo" alt="logo">
                                <img src="assets/img/logo_white%402x.png" class="retina white-logo" alt="logo">
                            </a>
                        </div>
                        <!--  END Header Logo  -->
                        <!--  Classic menu, responsive menu classic  -->
                        <div id="menu-classic">
                            <div class="menu-holder">
                                <ul>
									<?php
										if($_SESSION['lang']=='hun'){
											echo '
                                    <li>
                                        <a href=index.php'; if($page_type == "index"){echo 'class="active-item"';} echo' >Kezdőlap</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "blog"){echo ' class="active-item"';} echo'>Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "galery"){echo ' class="active-item"';} echo'>Képgaléria</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "statistics"){echo ' class="active-item"';} echo'>Statisztikák</a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)" ';if($page_type == "sup"){echo ' class="active-item"';} echo'>Támogatóink</a>
                                    </li> -->
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "contact"){echo ' class="active-item"';} echo'>Kapcsolat</a>
                                    </li>';
										}else{
											echo'
                                    <li>
                                        <a href=index.php'; if($page_type == "index"){echo ' class="active-item"';} echo' >Home</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "blog"){echo ' class="active-item"';} echo'>Blog</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "galery"){echo ' class="active-item"';} echo'>Galery</a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "statistics"){echo ' class="active-item"';} echo'>Statistics</a>
                                    </li>
                                    <!-- <li>
                                        <a href="javascript:void(0)" ';if($page_type == "sup"){echo ' class="active-item"';} echo'>Támogatóink</a>
                                    </li> -->
                                    <li>
                                        <a href="javascript:void(0)" ';if($page_type == "contact"){echo ' class="active-item"';} echo'>Contact</a>
                                    </li>';
										}
									?>
									<li>
										<a href="index.php?lang=en" style="margin-left: 30px;margin-right: 0px;"><img src="assets/img/british-flag-icon.png" alt="British flag" height="25" width="25"></a>
										<a href="index.php?lang=hun"  style="margin-left: 0px;"><img src="assets/img/Hungary-flag-icon.png" alt="Magyar zászló" height="25" width="25"></a>
									</li>
                                </ul>
                            </div>
                        </div>
                        <!--  END Classic menu, responsive menu classic  -->
                        <!--  Button for Responsive Menu Classic  -->
                        <div id="menu-responsive-classic">
                            <div class="menu-button">
                                <span class="bar bar-1"></span>
                                <span class="bar bar-2"></span>
                                <span class="bar bar-3"></span>
                            </div>
                        </div>
                        <!--  END Button for Responsive Menu Classic  -->
                    </nav>
                </div>
            </header>