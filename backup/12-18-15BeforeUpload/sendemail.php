<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);
//Need Error traps and form validation CDS 12-16-15
    //$name = @trim(stripslashes($_POST["name"])); 
	$fname = @trim(stripslashes($_POST["fname"])); //CDS 12-16-17
	$lname = @trim(stripslashes($_POST["lname"])); //CDS 12-16-17
    $email = @trim(stripslashes($_POST["email"])); 
    //$subject = @trim(stripslashes($_POST["subject"])); 
	$subject = "Contact Form-Contact Us.html"; //CDS 12-16-17
    $message = @trim(stripslashes($_POST['message'])); 

    $email_from = $email;
    $email_to = 'info@carlmontrobotics.org'; //CDS 12 -16-15

    $body = 'Subject: ' . $subject . "\n\n" . 'Frist Name: ' . $fname . "\n\n" . 'Last Name: ' . $lname . "\n\n" . 'Email: ' . $email . "\n\n" . 'Message: ' . $message;

   $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');

    echo json_encode($status);
    die;