<?php
var_dump($_POST);


$name = $_POST['name'];
$email = $_POST['email'];
$mail_subject = $_POST['subject'];
$message = $_POST['message'];

$to = "jashim.ncn@gmail.com";
$subject = $mail_subject;

$message = $message;

$header = $subject . '\r\n';
$header .= "MIME-Version: 1.0\r\n";
$header .= "Content-type: text/html\r\n";

$retval = mail($to, $subject, $message, $header);

if ($retval == true) {
    echo "Message sent successfully...";
} else {
    echo "Message could not be sent...";
}
