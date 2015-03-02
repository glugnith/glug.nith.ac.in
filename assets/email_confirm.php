<?php
    require ('alias_functions.php');

    //Verifying Passkey obtained from Link
    $passkey = $_GET['passkey'];
    $result = match_confirm_code($passkey);

    //check whether user has already verified or not
    if ( $result ) {
        $email = $_SESSION['verified_email'];
        $verified = check_email("registered_users.txt",$email);
    }

    //Retrieve data from temporary users file if passkey verified
    if ( $result ) {
        if ( $verified ) {
            echo "Your have already requested for an alias. You will recieve your alias shortly.";
        } else {
            echo "Your E-mail address has been verified. You will recieve your alias shortly.";
            //echo $email;
            copy_data($email);
        }
    } else {
        echo "Wrong Confirmation Code.";
    }

?>
