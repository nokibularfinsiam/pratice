<?php
    require_once('../model/NotificationModel.php');

    session_start();

    $notify = $_REQUEST['notification'];

    if($notify == ""){
    
        echo "fill all the section!";
    
    }
    else{
        $status = notification($notify);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            echo "Notification successfully delivered";
        }else{
            echo "not implemented";
        }
    }
?>