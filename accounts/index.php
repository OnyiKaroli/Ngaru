<?php
  require_once 'config/config.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Courier || Login</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="icon" type="image/x-icon" href="favicon.ico">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <script src="build/js/keys/vatmpad.js"></script>
</head>
<body class="hold-transition login-page" >
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>Ngaru Logistics Ltd</b></a>
  </div>

      <script type="text/javascript">

document.addEventListener('contextmenu', event => event.preventDefault());


    </script>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>
<?php
  //Logout
  if (isset($_GET['log_out'])) {
    $end = session_destroy();
    if ($end) {
      echo "
       <div class='alert alert-success alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          </button>
          <strong>Successfully Logged out.</strong> <br>Log in to continue.
        </div>";
        header( "refresh:url=../index" );
    }
  }


if (isset($_POST['signin']))
{
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $res= mysqli_query($server, "SELECT * FROM `users` WHERE email='$email' AND password='$password'") or 
    die(mysqli_error($server));
    //check rows returned
    $count=mysqli_num_rows($res);

    if($count<1)
    {

      echo "
       <div class='alert alert-danger alert-dismissible' role='alert'>
          <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
          </button>
          <strong>Log in</strong> failed.<br> Check your details and try again.
        </div>";
    }
    else
    {

      $_SESSION['user']=array();

      $sel= mysqli_query($server, "SELECT * FROM `users` WHERE email='$email' AND password='$password'") or die(mysql_error());
      while ($column=mysqli_fetch_array($sel)) {
        $_SESSION['user']['firstname']=$column[1];
        $_SESSION['user']['role']=$column[5];
        $_SESSION['user']['email']=$column[3];


      }



      header("location:dashboard");

}


}


?>

      <form method="post">


 






        <div class="input-group mb-3">
          <input type="text" placeholder="email or id"  name="email" class="form-control" required="" >

          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>


        <div class="input-group mb-3">
          <input type="password" class="form-control" name="password" required="" placeholder="Password" >
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">

          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" name="signin" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- /.social-auth-links -->

      <p class="mb-1">
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>


</body>
</html>
