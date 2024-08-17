<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Include the PHPMailer library and mailing variables
require("./mailing/mailfunction.php");

// Retrieve form data
$name = isset($_POST["name"]) ? $_POST["name"] : "";
$phone = isset($_POST["phone"]) ? $_POST["phone"] : "";
$email = isset($_POST["email"]) ? $_POST["email"] : "";
$message = isset($_POST["message"]) ? $_POST["message"] : "";

// Construct email body
$body = "<ul><li>Name: ".$name."</li><li>Phone: ".$phone."</li><li>Email: ".$email."</li><li>Message: ".$message."</li></ul>";

// Send email
$status = mailfunction("siblizzsolution@gmail.com", "SIBLIZZSOLUTIONS", $body); // Receiver email address and name
if($status) {
    echo '<center><h1>Thanks! We will contact you soon.</h1></center>';
} else {
    echo '<center><h1>Error sending message! Please try again.</h1></center>';
}
?>
