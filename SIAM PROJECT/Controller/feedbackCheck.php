<?php
    require_once('../Model/feedbackModel.php');

    session_start();

    $email = $_REQUEST['email'];
    $feedback = $_REQUEST['feedback'];

    if($email == "" || $feedback == ""){
    
        echo "fill all the section!";
    
    }
    else{
        $status = feedback($email, $feedback);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            echo "Thank you for your feedback";
        }else{
            echo "invalid user!";
        }
    }
?>