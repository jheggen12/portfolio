<?php
$message = $_POST['message'];
$email = $_POST['email'];
$name = $_POST['name'];
if(empty($name)) {
    echo 'Please add a contact name and try again.';
    exit();
} elseif(empty($email)) {
    echo 'Please add a contact e-mail and try again.';
    exit();
} elseif(empty($message)) {
    echo 'Please add an e-mail message and try again.';
    exit();
} else {
    $email = "joshwebdevel@gmail.com";
    $subject = $name." response";
    $headers = "From: ".$email;
    mail($email, $subject, $message, $headers);
    echo 'Email sent successfully. Thanks for reaching out!<br>';
    exit();
}