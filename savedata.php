<?php
echo $stu_name = $_POST['sname'];
echo $stu_address = $_POST['saddress'];
echo $stu_class = $_POST['class'];
echo $stu_phone = $_POST['sphone'];

$conn = mysqli_connect("localhost", "root", "", "php_crud") or die("connection Failed");

//run query

$sql = "INSERT INTO student( s_name, s_address, s_class, s_phone) VALUES ('{ $stu_name}', '{$stu_address}', '{$stu_class}', '{$stu_phone}' ) ";
$result = mysqli_query($conn, $sql) or die("Query Unsucessfull");

header("Location: http://localhost/php_crud/index.php");

mysqli_close($conn);

?>