<?php
$sendto   = "omolara.adejuwon@gmail.com";
$usermail = $_POST['email'];
$content  = nl2br($_POST['feedback']);

$subject  = "New Feedback Message";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

$feedback  = "<html><body style='font-family:Arial,sans-serif;'>";
$feedback .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>New User Feedback</h2>\r\n";
$feedback .= "<p><strong>Sent by:</strong> ".$usermail."</p>\r\n";
$feedback .= "<p><strong>Message:</strong> ".$content."</p>\r\n";
$feedback .= "</body></html>";


if(@mail($sendto, $subject, $feedback, $headers)) {
	echo "true";
} else {
	echo "false";
}

?>