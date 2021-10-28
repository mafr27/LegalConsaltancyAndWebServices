<?php

session_start();

require_once('contact_form_connection.php');

mysqli_select_db($db_conn, 'new_database');


// echo "<pre>";
// print_r($_POST);
// exit();

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
    $pass = $_POST['password'];
    // echo "string";
    // exit();




$sqlQuery = "SELECT * FROM usertable WHERE email = '$email' && password = '$pass'";

			$result = mysqli_query($db_conn, $sqlQuery);
			$num = mysqli_num_rows($result);
			var_dump( $num);
			//exit();
			if($num === 1){
				$row = mysqli_fetch_assoc($result);
				
				$_SESSION['email'] = $email;
				$_SESSION['name'] = $row['name'];
				// header('location:contact.php');
				?>
				<script>window.location.href="contact.php"</script>
				<?php
			}
			else{
				// header('location:login.php'); 
				?>
				<script>window.location.href="login.php"</script>
				<?php
			}
}
// else if(isset($_POST['register'])){
// 	$email = $_POST['email'];
//     $pass = $_POST['password'];
//     $userNumber = $_POST['phoneNumber'];
//     $userMail = $_POST['getMail'];
// }




?>