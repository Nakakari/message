<?php
//get data from form  

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

$to = "yanisuryanink01@gmail.com";
$subject = "Mail From nakakari.github.io";

$txt = "Name = " . $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@nakakari.github.io" . "\r\n" .
    "CC: somebodyelse@example.com";
if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
//redirect
header("Location:thankyou.html");
