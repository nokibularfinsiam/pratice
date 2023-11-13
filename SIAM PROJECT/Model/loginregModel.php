<?php

    require_once('DB.php');
    function login($username, $password){
        $con = getConnection();
        $sql = "select * from registration where userName='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        
        if(count($user) > 0){
            return true;
        }else{
            return false;
        }
    }
 
    function signup($user)
    {
        $firstname = $user['firstName'];
        $lastname = $user['lastName'];
        $username = $user['userName'];
        $email = $user['email'];
        $password = $user['password'];
        $gender = $user['gender'];
        $phone = $user['phone'];
        
        $con = getConnection();
        $sql = "INSERT INTO registration (firstName, lastName, userName, email, password, gender, phone)
        VALUES ('$firstname', '$lastname', '$username', '$email', '$password', '$gender','$phone')";

        if (mysqli_query($con, $sql)) {
            return true;
        } else {
            return false;
        }
    }
?>