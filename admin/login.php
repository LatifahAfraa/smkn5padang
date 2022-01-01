
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SMK NEGERI 5 PADANG | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="Ionicons/css/ionicons.min.css">
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

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="index.php"><b>SMK NEGERI 5 PADANG</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Silahkan Login untuk melanjutkan sesi</p>

    <form action="" method="post">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="username" placeholder="Username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="password" placeholder="Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-15">
          <div class="checkbox icheck">
            <button type="submit" name="submit" class="btn btn-primary btn-block btn-flat">Login</button>
          <button type="reset" name="reset" class="btn btn-warning btn-block btn-flat">Reeset</button>
        </div>
        <!-- /.col -->
          
        </div>
        <!-- /.col -->
      </div>
    </form>
  <?php
  if(isset($_POST['submit'])){
    include "koneksi/koneksi.php";
    $pass=$_POST['password'];
    $login=mysqli_query($konek, "select * from user where username='$_POST[username]'");
    $cek=mysqli_num_rows($login);
    $data=mysqli_fetch_array($login);
    if($cek>0){
      if(password_verify($pass, $data['password'])) { //hash 
        $_SESSION['status']='login';  //session untuk menyimpan data
        $_SESSION['level']=$data['level'];
        $_SESSION['username']=$data['username'];
        echo "<script>window.location='index.php'</script>";
      } else 
      {
        echo "<script>alert('Password anda salah');</script>";
      }
      
    }
    else{
      echo "<script>alert('Username tidak ada');</script>";
    }
  }
  ?>

    <!-- /.social-auth-links -->

   

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
