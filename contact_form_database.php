<?php

session_start();
require_once('contact_form_connection.php');

$fullName = $_POST['fullName'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$location = $_POST['loc'];
$caseType = $_POST['type_of_case'];
$consultPerson = $_POST['consult_person'];

$aboutClient = $_POST['about_client'];
$reachClient = $_POST['reach_client'];
// $getAppointment1 = $_POST['appoint_day1'];
            $getAppointment1 = implode(',', $_POST['appoint_day1']);
$day_time_appoint_1 = $_POST['day_time_appoint_1'];



// $sql = "INSERT INTO contactform (fullName, email, phone, loc) VALUES ('$fullName', '$email', $phone, '$location');";

$sql = "INSERT INTO contactform (full_name, email, Phone, location, select_case, consult, about_client, reach_client, appointment_days, timing_of_day) VALUES ('$fullName', '$email', '$phone', '$location', '$caseType', '$consultPerson', '$aboutClient', '$reachClient', '$getAppointment1','$day_time_appoint_1');";

if(mysqli_query($db_conn, $sql)){

		// ---------------------------
		$html="<div style='width: 300px; height: 200px; background-color: lightblue; text-align:center; padding: 20px;'>
				<h4>Hello $fullName</h4>
				<h5>Your query and information has been successfully submited Our attorney will contact you as soon as possible </h5>
				</div>";
	
	include('phpGmailSMTP/smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	// echo "<pre>";
	// print_r($mail);
	// exit();
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="rehmanhaaid795@gmail.com";
	$mail->Password="Ecommerceproject12jun";
	$mail->SetFrom("rehmanhaaid795@gmail.com");
	$mail->addAddress($email);
	$mail->IsHTML(true);
	$mail->Subject="Digital Advisory Consultation";
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	/*$mail->send();*/
	if($mail->send()){
		echo "Mail send";
		exit();
	}else{
		echo "Email Failed";
		exit();
	}
		//=======================================



header("Location: contact.php?q=Your query and information has been successfully submited");
}
else{
	echo "Fail";
	exit();
}

 
?>