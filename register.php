<!DOCTYPE html>
<?php
  ob_start();
  session_start();
  if(!isset($_SESSION['valid'])){
    $_SESSION['valid'] = false;
  }
  if( $_SESSION['valid'] == true){ 
    header("Location: index.php");
  }
  
  // Load the driver
  require_once("rdb/rdb.php");

  // Connect to localhost
  $conn = r\connect('localhost');
?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CHLoud | Regisztráció</title>
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
    .register-page{
      background-color: #2f2f2f;
      color: #ffffff;
    }
    .register-box{
      background-color: #000000;
      color: #ffffff;
      border-radius: 1%;
    }
    .register-logo{
      background-color: #000000;
      color: #ffffff;
      border-radius: 100%;
    }
    .register-box-body{
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
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="index.php" style="color: #054e70;"><b style="color: #098bc6;">CHLoud</b>Services</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Új felhasználó regisztrálása</p>
    
    <?php
      $msg = '';
      $type_b = '';
      $type_p = '';
      $err = false;
      if (isset($_POST['submit']) && !empty($_POST['nickname'])  && !empty($_POST['username'])  && !empty($_POST['password']) 
           && !empty($_POST['email'])  && !empty($_POST['password_again']) ) {
        
        $num = r\db('chloudservices')->table('users')->filter(array('id' => $_POST['username']))->count()->run($conn);
        if($num != 0){
          $err = true;
          $msg .= "<li>A felhasználónév már foglalt, kérlek válassz másikat! </li>";
          $type_b = 'alert-danger';
          $type_p = 'fa-ban';
        }
        if($_POST['password_again'] != $_POST['password']){
          $err = true;
          $msg .= "<li>A jelszavak nem egyeznek meg!</li>";
          $type_b = 'alert-danger';
          $type_p = 'fa-ban';
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
          $err = true;
          $msg .= "<li>Adjon meg érvényes email címet!</li>";
          $type_b = 'alert-danger';
          $type_p = 'fa-ban';
        }
        if($err == false){
          $msg = '<li>Sikeresen regisztrált! Hamarosan kapni fog egy visszaigazóló emailt, a profilja aktiválsáról emailben értesítjük. Hamarosan átirányítjuk a kezdőlapra.</li>';
          $type_b = 'alert-success';
          $type_p = 'fa-check';
          $message = '<h4>Kedves '.$_POST['nickname'].'!</h4></br><p>A regisztrációját kézzel dolgozzuk fel, ez eltarthat egy ideig. Amint aktív a profilja emailban értesítjük.</p></br><p>A regisztrált adatok:</p></br><p>username: '.$_POST['username'].' | email: '.$_POST['email'].' | passsword: '.$_POST['password'].'</p></br><p>Köszönettel:</p><p>CHLoudTeam</p><p><small>"Élmények mindíg veled!"</small>';
          
          require 'PHPMailer/PHPMailerAutoload.php';
          
          $mail = new PHPMailer;

          //$mail->SMTPDebug = 3;                               // Enable verbose debug output

          $mail->isSMTP();                                      // Set mailer to use SMTP
          $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
          $mail->SMTPAuth = true;                               // Enable SMTP authentication
          $mail->Username = 'team.chloud@gmail.com';                 // SMTP username
          $mail->Password = 'moonkop666';                           // SMTP password
          $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
          $mail->Port = 587;                                    // TCP port to connect to

		  
			$mail->setFrom($_POST['email'], $_POST['username']);
			$mail->addAddress('team.chloud@gmail.com', 'CHLoudTeam');     // Add a recipient
			$mail->addReplyTo($_POST['email'], $_POST['username']);

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = '[Registration]';
		$mail->Body    = '{<p>id: "'.$_POST['username'].'",</p><p>userpassport: "'.$_POST['password'].'",</p><p>useremail: "'.$_POST['email'].'",</p><p>'.'nickname: "'.$_POST['nickname'].'"</p>}';
          
          if(!$mail->send()) {
            $err = true;
            $msg .= "<li>Valami nem működött, kérlek próbáld később :(</li><li>Hiba:".$mail->ErrorInfo."</li>";
            $type_b = 'alert-danger';
            $type_p = 'fa-ban';
          }else{
			$mail->clearAllRecipients();
			
			$mail->setFrom('team.chloud@gmail.com', 'CHLoudTeam');
			$mail->addAddress($_POST['email'], $_POST['nickname']);     // Add a recipient
			$mail->addReplyTo('team.chloud@gmail.com', 'CHLoudTeam');

			$mail->isHTML(true);                                  // Set email format to HTML

			$mail->Subject = '[CHLoudServices] Regisztracio';
			$mail->Body    = $message;
			
			$mail->send();
			header("refresh:5; url=index.php");
          }
            
          /*
          use \Mail\Message;

          $mail = new Message;
          $mail->setFrom('John <john@example.com>')
            ->addTo('peter@example.com')
            ->addTo('jack@example.com')
            ->setSubject('Order Confirmation')
            ->setBody("Hello, Your order has been accepted.");
          
          $mailer = new Nette\Mail\SmtpMailer([
            'host' => 'smtp.gmail.com',
            'username' => 'chloud.team@gmail.com',
            'password' => 'moonkop666'
            'secure' => 'ssl',
            'context' =>  [
              'ssl' => [
                'capath' => '/path/to/my/trusted/ca/folder',
              ],
            ],
          ]);
          $mailer->send($mail);
          */
          
        }
        
      }else{
        $msg = '<li>Kérjük töltsön ki minden mezőt!</li>';
        $type_b = 'alert-warning';
        $type_p = 'fa-warning';
      }
        
    ?>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method="post">
      <div class="form-group has-feedback">
        <input type="text" name="username" class="form-control" placeholder="Felhasználónév" <?php if(isset($_POST['submit']) && !empty($_POST['username'])){ echo 'value="'; echo $_POST['username']; echo '"';} ?> >
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="text" name="nickname" class="form-control" placeholder="Becenév (képsőbb megváltoztattható)" <?php if(isset($_POST['submit']) && !empty($_POST['nickname'])){ echo 'value="'; echo $_POST['nickname']; echo '"';} ?>>
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="email" name="email" class="form-control" placeholder="Email cím" <?php if(isset($_POST['submit']) && !empty($_POST['email'])){ echo 'value="'; echo $_POST['email']; echo '"';} ?>>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password" class="form-control" placeholder="Jelszó">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="password_again" class="form-control" placeholder="Jelszó megerősítése">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
      </div>

      <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Regisztráció</button>

    </form>

    <a href="login.php" class="text-center">Már van felhasználóm</a>
    <?php 
      if(isset($_POST['submit'])){
        echo
        '<div class="alert '; echo $type_b; echo ' alert-dismissible">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <h4><i class="icon fa '; echo $type_p; echo '"></i> Bejelentkezés:</h4>
          <ul>'; echo $msg; echo '</ul>
        </div>';
      } 
    ?>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' // optional
    });
  });
</script>
</body>
</html>
