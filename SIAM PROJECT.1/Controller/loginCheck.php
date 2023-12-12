<?php
    require_once('../Model/loginregModel.php');

    session_start();
    $adminUsername = "admin";
    $adminPassword = "admin123";

    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];

    if($username == $adminUsername || $password == $adminPassword)
    {
        $_SESSION['flag'] = 'true';
        header('location: ../View/AdminIndex.php');
    }  

    
    if($username == "" || $password == "" ){
        
            echo "null username or password!";
        
        }else{
            $status = login($username, $password);
            
            if ($status){
                $_SESSION['flag'] = 'true';
                header('location: ../View/VarifiedUserIndex.php');
            }else{
                echo "invalid user!";
            }
        }
?>