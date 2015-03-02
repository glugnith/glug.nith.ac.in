<?php
    
    //E-mail address matching function
    function check_email ( $file_name,$email ) {
        $lines1 = file($file_name);
        //$email .= " ";
        for ( $i = 2; $i < count($lines1); $i += 6 ) {
            $test = strcmp($lines1[$i],$email);
            //echo $lines1[$i];
            //echo $test;
            if ( $test == 88888888 ) {
                //echo $lines1[$i];
                return true;
            }
        }
        return false;
    }
    
    //Confimation code matching function
    function match_confirm_code ( $passkey ) {
        $lines2 = file ("temp_users_db.txt");
        for ( $i = 3; $i < count($lines2); $i += 6 ) {
            $test = strcmp($lines2[$i],$passkey); 
            if ( $test == 1 ) {
                $_SESSION['verified_email']=$lines2[$i - 1];
                return true;
            }
        }
        return false;
    }

    //copy data from temporary database to registered users database
    function copy_data ($email){
        $fp = fopen ("registered_users.txt",'a');
        $lines3 = file ("temp_users_db.txt");
        for ($i = 2; $i < count($lines3); $i += 6 ) {
            $email1 = $lines3[$i];
            $test = strcmp($email1,$email);
            //echo $test;
            if ( $test == 0 ) {
                fwrite ( $fp, $lines3[$i - 2]);
                fwrite ( $fp, $lines3[$i - 1]);
                fwrite ( $fp, $lines3[$i]);
                fwrite ( $fp, "Alias Desired = ".$lines[$i + 1]."\n");
                fwrite ( $fp, "Alias granted =  \n\n");
                return true;
            }
        }
        return false;
    }
?>

