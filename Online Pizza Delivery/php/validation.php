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
$password= $_POST['password'];

$q1 = "select * from signin where name = '$name' && password = '$password' ";

$result = mysqli_query($conn, $q1);

$num = mysqli_num_rows($result);

if($num == 1){

	$_SESSION['username']=$name;
	header('location:../index2.php');

}else{
	echo "Login Unsuccessful: Invalid Username Or Password";
	header('refresh: 2; url= ../login.php');
}

?>