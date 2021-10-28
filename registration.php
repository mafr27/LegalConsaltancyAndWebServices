<?php
session_start();
header('location:login.php');
require_once('contact_form_connection.php');
mysqli_select_db($db_conn, 'new_database');
$username = $_POST['user'];
$pass = $_POST['password'];
$userNumber = $_POST['phoneNumber'];
$userMail = $_POST['getMail'];
$sqlQuery = "SELECT * FROM usertable WHERE email = '$userMail'";
$result = mysqli_query($db_conn, $sqlQuery);
$num = mysqli_num_rows($result);
if($num == 1){
	echo "Email Already Exists";
}
else{
	$reg = "INSERT INTO usertable(name, password, phoneNumber, email) VALUES('$username', '$pass', '$userNumber', '$userMail')";
	mysqli_query($db_conn, $reg);
	header("Location: login.php?q=You have Successfully Registered");
}
?>