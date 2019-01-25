<!DOCTYPE html>
<html lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Title Page</title>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>

        <!-- <?php

            $servername="localhost";
            $username_server="root";
            $password_server="";
            $dbname="mydb";

            $conn = new mysqli($servername,$username_server,$password_server,$dbname);

            if($conn->connect_error){
                die('Erorr'.$conn->connect_error);
            }

            $id = $_GET['id'];
            $sql ="SELECT * FROM `thong tin` Where `id`=$id";

            $result = mysqli_query($conn, $sql);

            ?> -->
        <form action="sua.php" method="GET" role="form">
            <legend>Sửa</legend>
       <?php if($result->num_rows >0){

        while ( $row = $result->fetch_assoc()) {?>
            <input type="hidden" name="id" value="<?php echo $id?>">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" placeholder="Username..." name="username" value="<?php echo $row['username']?>">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" placeholder="typing password" name="password" value="<?php echo $row['password'];?>"required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="typing email" name="email" value="<?php echo $row['email'] ?>" required>
            </div>
            <div class="form-group">
                <label for="gender">Giới tính</label>
                <select name="gender" id="Gender" class="form-control" required="required">
                    <option value="<?php echo ($row['gender']==0)?0:1;?>"><?php echo ($row['gender']==0)?"Nữ":"Nam";?></option>
                </select>
            </div>
        <?php } }?>
            
            <input type="submit" name="submit">
            <input type="submit" name="delete">
        </form>

        <!-- <?php }
        if(isset($_POST['submit'])){
            $id = $_POST['id'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $email = $_POST['email'];
            $gender = $_POST['gender'];

            $sql = "UPDATE `thongtin` SET `username`='$username',`password`='$password',`email`='$email',`gender`='$gender' WHERE `id`=$id";
            $result = mysqli_query($conn,$sql);

            if($result === TRUE){
                echo "cap nhat thanh cong";
            }else{
                echo "co loi";
            }
        }

    ?> -->

        <!-- jQuery -->
        <script src="//code.jquery.com/jquery.js"></script>
        <!-- Bootstrap JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="Hello World"></script>
    </body>
</html>