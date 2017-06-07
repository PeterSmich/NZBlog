<!DOCTYPE html>
<?php
  ob_start();
  session_start();
  if( $_SESSION['valid'] == true){ 
    header("Location: index.php");
  }
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CHLoud  | Bejelentkezés</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <style>
    .login-page{
      background-color: #2f2f2f;
      color: #ffffff;
    }
    .login-box{
      background-color: #000000;
      color: #ffffff;
      border-radius: 1%;
    }
    .login-logo{
      background-color: #000000;
      color: #ffffff;
      border-radius: 100%;
    }
    .login-box-body{
    background-color: #0f0f0f;
    color: #ffffff;border-radius: 1%;
    }
    h1,
    b,
    b > a,
    h1 > small,
    ol > li > a > i{
      color:#ffffff;
    }
  </style>
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a style="color: #054e70;"><b style="color: #098bc6;">CHLoud</b>Services</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Kérlek jelentkezz be!</p>
     <div>
      <?php
        $msg = 'Töltse ki a mezőket!';
        $type_b = 'alert-warning';
        $type_p = 'fa-warning';

        if (isset($_POST['login']) && !empty($_POST['username']) 
           && !empty($_POST['password'])) {

           if ($_POST['username'] == 'admin' && 
              $_POST['password'] == '1234') {
              $_SESSION['valid'] = true;
              $_SESSION['username'] = 'admin';
              $_SESSION['nickname'] = 'Admin';

              $msg = 'You have entered valid use name and password';
              $type_b = 'alert-success';
              $type_p = 'fa-check';
              header('Refresh: 1; URL = index.php');
           }else {
              $_SESSION['valid'] = false;
              $_SESSION['username'] = 'anonymus';  
              $msg = 'Wrong username or password';
              $type_b = 'alert-danger';
              $type_p = 'fa-ban';
           }
        }
     ?>
    </div>
    <form role = "form" 
            action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name = "username" placeholder="Email">
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name = "password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <button type="submit" name = "login" class="btn btn-primary btn-block btn-flat">Bejelentkezés</button>
    </form>

    <a href="#">Elgelejtettem a jelszavamat :(</a><br>
    <a href="register.php" class="text-center">Regisztráció</a>
    <div class="alert <?php echo $type_b ?> alert-dismissible">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      <h4><i class="icon fa <?php echo $type_p ?>"></i> Bejelentkezés:</h4>
      <p><?php echo $msg ?></p>
    </div>

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>

</body>
</html>
