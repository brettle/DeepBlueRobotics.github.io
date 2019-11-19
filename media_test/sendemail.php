<?php
	header('Content-type: application/json');
	$status = array(
		'type'=>'success',
		'message'=>'Email sent!'
	);

    if (empty($_POST["name"])) {
        $nameErr = "Your name is required";
    } else {
        $name = check_input($_POST['name']);
        //checks if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Only letters and white space are allowed"
        }
    }
    
    if (empty($_POST["email"])) {
        $emailErr = "An email address is required";
    } else {
        $email = check_input($_POST['email']);
        //check if email address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }
    
    if (empty($_POST["subject"])) {
        $subjectErr = "A subject is required";
    } else {
        $subject = check_input($_POST['subject']);
    }
    
    if (empty($_POST["message"])) {
        $messageErr = "A message is required";
    } else {
        $message = check_input($_POST['message']);
    }

    $email_from = $email;
    $email_to = 'contactus@carlmontrobotics.org';

    $body = 'Name: ' . $name . 'Message: ' . $message;

    $success = @mail($email_to, $subject, $body, 'From: <'.$email_from.'>');
    
    function check_input($data) {
        $data = trim(stripslashes(htmlspecialchars($data)));
        return $data
    }
    echo json_encode($status);
    die;