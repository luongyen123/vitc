<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin - Register</title>

    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">

  </head>
  

  <body class="bg-dark">
  <form action="register.php" method="post">
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
           <?php
 require_once("lib/connection.php");
 if (isset($_POST["btn_submit"])) {
   //lấy thông tin từ các form bằng phương thức POST
   $username = $_POST["username"];
   $password = $_POST["password"];
   $fullname = $_POST["fullname"];
   $email = $_POST["email"];
   $ngaysinh= $_POST["ngaysinh"];

   //Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
   if ($username == "" || $password == "" || $fullname == "" || $email == "") {
    echo "bạn vui lòng nhập đầy đủ thông tin";
   }else{
   // Kiểm tra tài khoản đã tồn tại chưa
   $sql="select * from users where username='$username'";
 $kt=mysqli_query($conn, $sql);
 
 if(mysqli_num_rows($kt)  > 0){
 echo "Tài khoản đã tồn tại";
 }else{
 //thực hiện việc lưu trữ dữ liệu vào db
      $sql = "INSERT INTO users(
              username,
              password,
              fullname,
              email,
              ngaysinh
              ) VALUES (
              '$username',
              '$password',
              '$fullname',
              '$email',
              '$ngaysinh'
              )";
     // thực thi câu $sql với biến conn lấy từ file connection.php
   mysqli_query($conn,$sql);
    echo "Chúc mừng bạn đã đăng ký thành công!  ";
    echo '<a href="login.php">Login</a>';

 }
     
 
   }
 }
 ?>
          <form>
           
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="userName" name="username" class="form-control" placeholder="User name" required="required" autofocus="autofocus">
                    <label for="userName">User name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="fullName" name="fullname" class="form-control" placeholder="Full name" required="required">
                    <label for="fullName">Full name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required">
                    <label for="inputEmail">Email address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" placeholder="Ngày Sinh" required="required">
                    <label for="ngaysinh">Ngày sinh</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
              </div>
            </div>
            <input type="submit" name="btn_submit" class="btn btn-primary btn-block" value="Register">
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="login.php">Login Page</a>
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
