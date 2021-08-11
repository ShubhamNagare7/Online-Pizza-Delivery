<?php

session_start();

$servername = "localhost";
$username = "root";
$password = "";
$db="dbpizza";


$conn = mysqli_connect('localhost', 'root', '', 'dbpizza');

if (!$conn) {
	echo "No connection";
}

mysqli_select_db($conn, 'dbpizza');

$name= $_POST['name'];
$email= $_POST['email'];
$password= $_POST['password'];
$address= $_POST['address'];

$q1 = "select * from signin where name = '$name' OR email = '$email' ";

$result = mysqli_query($conn, $q1);

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Data already exists";
	header('refresh:2; url=../reg.php');
}else{
	$q2 = "insert into signin(name, email, password, address) values('$name', '$email', '$password', '$address') ";
	mysqli_query($conn, $q2);
	echo "data inserted";
	header('location:../login.php');
}

?>