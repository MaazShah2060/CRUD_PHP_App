<?php

 $stu_name = $_POST['sname'];
 $stu_address = $_POST['saddress'];
 $stu_class = $_POST["class"];
 $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost","root","","crud") or die("Connection Failed");

$sql = "INSERT INTO student(sname,sclass,sphone,saddress) VALUES('{$stu_name}','{$stu_class}','{$stu_phone}','{$stu_address}')";
$result = mysqli_query($conn,$sql) or die("Invalid Query!");
header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
