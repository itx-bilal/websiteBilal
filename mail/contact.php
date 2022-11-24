<?php


$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$m_subject = strip_tags(htmlspecialchars($_POST['subject']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$to = "muhammadbilal7310@gmail.com"; // Change this email to your //
$subject = "Mail from Mywebsite";
$txt = "Name = ". $name . "\r\n Email = " . $email ."\r\n Message = " . $message;
// $body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\n\nEmail: $email\n\nSubject: $m_subject\n\nMessage: $message";
$header = "From: $email";
$header .= "Reply-To: $email";	

if($email!=NULL) {
  mail($to,$subject,$txt,$header);
}
?>
// if(email!=NULL($to, $subject, $txt, $header))
//   http_response_code(500);
// ?>
