<?php
if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
    $content = $_POST["content"];

	$conn = mysqli_connect("localhost", "root", "", "webprice") or die("Connection Error: " . mysqli_error($conn));
	mysqli_query($conn, "INSERT INTO tblcontact (contact_name, contact_email,content) VALUES ('" . $name. "', '" . $email. "','" .  $content. "')");
	$insert_id = mysqli_insert_id($conn);
	//if(!empty($insert_id)) {
	   $message = "Your contact information is saved successfully.";
	   $type = "success";
	//}
}
require_once "questionnaire.php";
/*require_once "contact-view.php";*/
?>