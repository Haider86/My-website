<?php

//Get the form fields, remove html tags and whitespace.
$name = strip_tags(trim($_POST["name"]));
$name = str_replace(array("\r","\n"),array("",""),$name);
$email = filter_var(trim($_POST["email"]),FILTER_SANITIZE_EMAIL);
$message = trim($_POST["message"]);


//Check the data.

if(empty($name)OR empty($message)OR !filter_var($email,FILTER_VALIDATE_EMAIL)){
    header("Location:http://alsalihns.se/index.php?success=-1#form");
    exit;
}

//Set the recipient email address.
$recipient = "alsalihns@gmail.com";


//Set the email subject.

$subject = "New contact form $name";

//Bulid the email content. 
$email_content = "Name: $name\n";
$email_content .= "Email: $email\n\n";
$email_content .= "Message: \n$message\n";


//Bulid the email headers.
$email_headers = "Form: $name <$email>";

//Send the email.
mail($recipient, $subject, $email_content, $email_headers);
    
//Redirect to index.html page with seccess code 

header("Location:http://alsalihns.se/index.php?success=1#form");








?>