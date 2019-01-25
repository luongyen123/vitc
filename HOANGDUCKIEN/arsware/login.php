<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Login</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>

  <body class="bg-dark">
    <?php
 //Gọi file connection.php ở bài trước
 require_once("lib/connection.php");
 // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
 if (isset($_POST["btn_submit"])) {
 // lấy thông tin người dùng
 $username = $_POST["username"];
 $password = $_POST["password"];
 //làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
 //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
 $username = strip_tags($username);
 $username = addslashes($username);
 $password = strip_tags($password);
 $password = addslashes($password);
 if ($username == "" || $password =="") {
 echo "username hoặc password bạn không được để trống!";
 }else{
 $sql = "select * from users where username = '$username' and password = '$password' ";
 $query = mysqli_query($conn,$sql);
 $num_rows = mysqli_num_rows($query);
 if ($num_rows==0) {
 echo "tên đăng nhập hoặc mật khẩu không đúng !";
 }else{
 //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
 $_SESSION['userName'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.php');
 }
 }
 }
?>
<form action="login.php" method="post">
    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" id="userName" name="username" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="userName">User name</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Password</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Remember Password
                </label>
              </div>
            </div>
             <input type="submit" name="btn_submit" class="btn btn-primary btn-block" value="Login">
            
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="register.php">Register an Account</a>
            <a class="d-block small" href="forgot-password.php">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>
  </form>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
