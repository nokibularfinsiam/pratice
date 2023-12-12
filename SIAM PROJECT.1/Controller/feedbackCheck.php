<?php
    require_once('../Model/feedbackModel.php');

    session_start();

    function EmailValidation($email) {
        $count_a = 0;
        $count_d = 0;
    
        for ($i = 0; $i < strlen($email); $i++) {
            if ($email[$i] == '@') {
                $count_a++;
            } elseif ($email[$i] == '.') {
                $count_d++;
            }
        }
    
        return ($count_a == 1 && $count_d >= 1);
    }

    $email = $_REQUEST['email'];
    $feedback = $_REQUEST['feedback'];
    if($email == "" || $feedback == ""){
    
        echo "fill all the section!";
    
    } else {
        if (!EmailValidation($email)) {
            echo "Invalid email use mantain this format' example@gmail.com '!";
        } else{
        $status = feedback($email, $feedback);
        
       if ($status){
            $_SESSION['flag'] = 'true';
            echo "Thank you for your feedback";

        }//else{
           // echo "invalid user!";
       // }
    }
}

