<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel" >
            <div class="pull-left image" style="padding-bottom: 20%;">
                <img src=<?php echo $page_level?>dist/img/avatars/<?php if( $_SESSION['valid'] == true){ echo $_SESSION['username'];}else{ echo "anonymus";} ?>.png class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>Szervusz <?php echo $_SESSION['nickname'] ?>!</p>
                <div>
                <?php
                  if( $_SESSION['valid'] == 'true' ){
                    echo '<p><a href=';echo $page_level; echo 'profile.php><button type="submit" name="profil" id="profil" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-user">Adatlap</i></button></a></br></p>';
                    echo '<a href=';echo $page_level; echo 'logout.php><button type="submit" name="sign_out" id="out" class="btn btn-warning btn-xs"><i class="fa fa-sign-out">Kijelentkezés</i></button></a></br>';
                  }else{
                    echo '<p><a href=';echo $page_level; echo 'login.php><button type="submit" name="sign_in" id="in" class="btn btn-danger btn-xs"><i class="fa fa-sign-in">Bejelentkezés</i></button></a></p>';
                    echo '<a href=';echo $page_level; echo 'register.php><button type="submit" name="register" id="reg" class="btn btn-warning btn-xs"><i class="fa fa-user-plus">Regisztráció</i></button></a></br>';
                  }
                ?>
                </div>
            </div>
        </div>

        <!-- search form
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li <?php if($page_type == "index"){echo 'class = "active"';} ?>><!--set the correct active content!-->
                <a href=<?php echo $page_level; ?>index.php>
                    <i class="fa fa-home"></i>
                    <span>Home</span>
                    <i class="label label-primary pull-right"></i>
                </a>
            </li>
            <li <?php if($page_type == "ijaszda"){echo 'class = "active"';} ?>>
              <a href=<?php echo $page_level; ?>pages/ijaszda/ijaszda.php>
                <i class="fa fa-bullseye"></i>
                  <span>Íjászda</span>
              </a>
            </li>
            <li <?php if($page_type == "smarthome"){echo 'class = "active"';} ?>>
              <a>
                <i class="fa fa-bank"></i>
                  <span>SmartHome</span>
              </a>
              <ul class="treeview-menu">
                <li><a href=<?php echo $page_level; ?>pages/smarthome/andrisszoba.php><i class="fa fa-circle-o"></i> Andris Szobája</a></li>
              </ul>
            </li>
            <li><a href=<?php echo $page_level; ?>pages/widgets.html><i class="fa fa-book"></i> <span>Documentation</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>
