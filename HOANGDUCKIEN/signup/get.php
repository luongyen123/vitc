<?php
echo "Firstname: ";
echo $firstname=$_POST["firstname"];
echo "<br> Lastname: ";
echo $lastname=$_POST["lastname"];
echo "<br> Fullname: ";
echo $fullname=$_POST["lastname"].$_POST["firstname"];
echo "<br> Mật khẩu: ";
echo $password1=$_POST["password"];
echo "<br> Giới tính: ";
echo $gender=($_POST["gender"]==1.)?"Nam":"Nữ";
echo "<br>Email: ";
echo $mail=$_POST["mail"];
echo "<br>Phone: ";
echo $Phone=$_POST["Phone"];
echo "<br>Câu hỏi: ";
echo $cauhoi=$_POST["cauhoi"];
echo "<br>Câu trả lời: ";
echo $answer=$_POST["answer"];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";




$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "INSERT INTO MyGuests( firstname,lastname,mail,password,gender,Phone,answer,cauhoi) VALUES ('$firstname','$lastname','$mail','$password1','$gender','$Phone','$answer','$cauhoi')";

var_dump($sql);
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>