<?php
if(!empty($_POST["send"])) {
	$name = $_POST["Name"];
	$email = $_POST["Email"];
	$subject = $_POST["subject"];
	$message = $_POST["message"];

	$conn = mysqli_connect("localhost", "root", "test", "blog_samples") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (name, email,subject,message) VALUES ('" . $name. "', '" . $email. "','" . $subject. "','" . $message. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "contact-view.php";
?>