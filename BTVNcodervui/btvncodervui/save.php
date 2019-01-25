
<?php
$username= $_POST["username"];
$password =$_POST["password"];
$email =$_POST["email"];

$servername = "localhost";
$username_sever = "root";
$password_sever = "";
$dbname = "mydb";

// Create connection
$conn = new mysqli($servername, $username_sever, $password_sever,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$sql = "INSERT INTO `thongtin`(`username`, `password`, `email`) VALUES ('$username','$password','$email')";

if ($conn->query($sql) ===TRUE) {

    echo "Đăng ký thành công";
}else {
    echo "Lỗi đăng ký";
}
?>
