<?php
    require_once('../model/loginregModel.php');

    session_start();
    $adminUsername = "admin";
    $adminPassword = "admin123";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == $adminUsername || $password == $adminPassword)
    {
        $_SESSION['flag'] = 'true';
        header('location: ../view/AdminIndex.php');
    }  

    
    if($username == "" || $password == "" ){
        
            echo "null username or password!";
        
        }else{
            $status = login($username, $password);
            
            if ($status){
                $_SESSION['flag'] = 'true';
                header('location: ../view/VarifiedUserIndex.php');
            }else{
                echo "invalid user!";
            }
        }
?>