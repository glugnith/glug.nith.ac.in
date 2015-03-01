<?php
    //Script to insert user data in temporary users database
    // To Do: fix check_email function
    
    require ('alias_functions.php');

    //Selecting file containing temp users details
    $fp = fopen ( "assets/temp_users_db.txt","a") or die ("Sorry, Your request could not be processed, Please try again later!");

    //Random code generation for email confirmation
    $confirm_code = md5(uniqid(rand()));

    //data received from Request form
    $name = $_POST['name'];
    $email = $_POST['email'];
    $rollno = $_POST['rollno'];

    //Checking if email is already registered
    $result1 = check_email("assets/registered_users.txt",$email);
    $result2 = check_email("assets/temp_users_db.txt",$email);

    //Insertion of data into database in the file
    if  ( !$result2 && !$result2 ) {
        fwrite ( $fp, $name."\n" );
        fwrite ( $fp, $rollno."\n");
        fwrite ( $fp, $email."\n");
        fwrite ( $fp, $confirm_code."\n\n");
        echo "Thank you for submitting your request. Your details have been saved.\n";
        echo "Please verify your E-mail address from the confirmation mail sent to you!\n";

    } else if ( $result2 ) {
        echo "You have already made  a request!";
    }

    //If insertion is successful, send confirmation link
    if ( true ) {
        
        //Send mail
        $email_to = $email;
        $subject = "Confirmation link for GLUG Mail";
        $header = "From: admin@glug.nith.ac.in";
        $message = "Hi!\n\n";
        $message .= "Here is confirmation link for verification of your E-mail for GLUG alias request!\n";
        $message .= "Please Click on the link below to verify your E-mail.";
        $message .= "http://glug.nith.ac.in/assets/email_confirm.php?passkey=$confirm_code";
        $sentmail = mail ($email_to,$subject,$message,$header);
    }
    fclose ($fp);
?>
