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
  <form action="edit-user.php" method="post">
    <?php
 session_start(); 
 ?>
<?php require_once("lib/connection.php");?>

<?php
 if (isset($_POST["btn_submit"])) {
 //lấy thông tin từ các form bằng phương thức POST
$username = $_POST["username"];
 $fullname = $_POST["fullname"];
 $password = $_POST["password"];
 $ngaysinh = $_POST["ngaysinh"];
 $email = $_POST["email"];
 $quyen = $_POST["quyen"];
 $id = $_POST["id"];
 // Viết câu lệnh cập nhật thông tin người dùng
 $sql="UPDATE `users` SET `username`='$username',`password`='$password',`fullname`='$fullname',`email`='$email',`ngaysinh`='$ngaysinh',`quyen`='$quyen' WHERE id=$id";
 
 // thực thi câu $sql với biến conn lấy từ file connection.php
 mysqli_query($conn,$sql);
 header('Location: tables.php');
 }
 
 $id = -1;
 if (isset($_GET['id'])) {
 $id = $_GET['id'];
 }
 $sql = "SELECT * FROM users WHERE id = ".$id;
 $query = mysqli_query($conn,$sql);
 
 function make_permission_dropdown($id){
 $select_1 = "";
 $select_2 = "";
 $select_3 = "";
 if ($id == 0) {
 $select_1 = 'selected = "selected"';
 }
 if ($id == 1) {
 $select_2 = 'selected = "selected"';
 }

 $quyen = '<select id="permission" name="permission">
 <option value="-1"></option>
 <option value="0" '.$select_1.'>Admin</option>
 <option value="1" '.$select_2.'>Thành viên</option>
 
 </select>';
 
 return $quyen;
 }
 
 
?>
 <?php
 while ( $data = mysqli_fetch_array($query) ) {
 $i = 1;
 $id = $data['id'];

 ?>
    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Chỉnh sửa thông tin thành viên</div>
        <div class="card-body">
           
          <form action="edit-user.php" method="POST">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
           
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="userName" name="username" class="form-control" placeholder="User name" required="required" autofocus="autofocus" value="<?php echo $data['username']; ?> ">
                    <label for="userName">User name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="fullName" name="fullname" class="form-control" placeholder="Full name" required="required" value="<?php echo $data['fullname']; ?>">
                    <label for="fullName">Full name</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required="required" value="<?php echo $data['email']; ?>">
                    <label for="inputEmail">Email address</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="date" id="ngaysinh" name="ngaysinh" class="form-control" placeholder="Ngày Sinh" required="required" value="<?php echo $data['ngaysinh']; ?>">
                    <label for="ngaysinh">Ngày sinh</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required="required" value="<?php echo $data['password']; ?>">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" placeholder="Confirm password" required="required" value="<?php echo $data['password']; ?>">
                    <label for="confirmPassword">Confirm password</label>
                  </div>
                </div>
                <div>Quyền
                  <?php echo make_permission_dropdown($data['quyen']); ?>
                </div>
              </div>
            </div>
            <input type="submit" name="btn_submit" class="btn btn-primary btn-block" value="Cật nhật">
          </form>
          
        </div>
      </div>
    </div>
  </form>
  <?php } ?>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
