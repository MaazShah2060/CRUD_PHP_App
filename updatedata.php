<?php
$stu_id = $_GET['sid'];
$stu_name = $_GET['sname'];
$stu_address = $_GET['saddress'];
$stu_class = $_GET['sclass'];
$stu_phone = $_GET['sphone'];

$conn = mysqli_connect('localhost','root','','crud') or die("Connection not established");
$sql = "UPDATE student SET sname = '{$stu_name}', sclass = '{$stu_class}', sphone='{$stu_phone}', saddress='{$stu_address}' WHERE sid={$stu_id}";
$result= mysqli_query($conn,$sql) or die("Invalid Query!!");
header("Location: http://localhost/crud/index.php");

mysqli_close($conn);

?>
