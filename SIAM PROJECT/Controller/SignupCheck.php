<?php
    session_start();
    require_once('../Model/loginregModel.php');
     
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];

   
    if($firstname == "" || $lastname == "" || $username == "" || $email == "" || $password == "" || $gender == "" || $phone == ""){
        echo "null username or password or email!";
    }
    else{
        $user = ['firstName'=> $firstname, 'lastName'=> $lastname, 'userName'=> $username, 'email'=>$email, 'password'=> $password, 'gender'=> $gender, 'phone'=> $phone];
        $status = signup($user);
        $_SESSION['user'] = $user;
        header('location: ../view/Login.html');
        if ($status){
            echo "you have signed up successfully";
            $_SESSION['flag'] = 'true';
            ;
        }else{
            echo "invalid user!";
        }
    }
?>

<!--<html>
    <body>
        <br>click here to login <a href="../view/login.php"> login </a>
    </body>
</html>-->

  
