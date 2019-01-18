<?php
echo $firstname=$_POST["firstname"]."<br>";
echo $lastname=$_POST["lastname"]."<br>";
echo $password1=$_POST["password"]."<br>";
echo $gender=($_POST["gender"]==1.)?"nam":"nữ"."<br>";
echo $mail=$_POST["mail"]."<br>";
echo $Phone=$_POST["Phone"]."<br>";
echo $cauhoi=$_POST["cauhoi"]."<br>";
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

// $sql = "INSERT INTO `myguests`(`firstname`, `lastname`, `mail`, `password`, `gender`, `Phone`, `answer`, `cauhoi`) VALUES ("."'".$firstname."',"."'".$lastname."',"."'".$mail."',"."'".$password1."',"."'". (int)$gender."',"."'".$Phone."',"."'".$answer."',"."'".$cauhoi")";
$sql = "INSERT INTO myguests( firstname,lastname,mail,password,gender,Phone,answer,cauhoi) VALUES ('$firstname','$lastname','$mail','$password1','(int)$gender','$Phone','$answer','$cauhoi')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();


?>