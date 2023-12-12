<?php
require_once('../model/loginregModel.php');
session_start();

function NameValidation($name) {
    for ($i = 0; $i < strlen($name); $i++) {
        $Char = $name[$i];
        
        if (!Rq_Letter($Char)) {
            return false;
        }
    }
    return true;
}

function Rq_Letter($char) {
    return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || $char == ' ');
}

function UsernameValidation($username) {
    for ($i = 0; $i < strlen($username); $i++) {
        $Char = $username[$i];
    
        if (!Rq_letter_number($Char)) {
            return false;
        }
    }
    return true;
}

function Rq_letter_number($char) {
    return (($char >= 'A' && $char <= 'Z') || ($char >= 'a' && $char <= 'z') || is_numeric($char));
}

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

function PasswordValidation($password) {

    $specialCharacters = "!@#$%^&*(),.?\":{}|<>";
    return (strlen($password) >= 6 && strpbrk($password, $specialCharacters) !== false);
}

function PhoneNumberValidation($phone) {

    $validformat = ['013', '014', '015', '016', '017', '018', '019'];
    $position = substr($phone, 0, 3);

    if (!in_array($position, $validformat)) {
        return false;
    } 
    //$phoneNumber = substr($phone, 3);
    if(is_numeric($phone) && strlen($phone) == 11)
    {
        return true;
    }
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['cpassword'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

if ($firstname == "" || $lastname == "" || $username == "" || $email == "" || $password == "" || $gender == "" || $phone == "") {
    echo "Null username or password or email!";
} else {

    if (!NameValidation($firstname)) {
        echo "Invalid firstname Use only letters!";
    } 
    else {
        if(!NameValidation($lastname)){
        echo "Invalid lastname Use only letters!";
        }
        else{

            if (!UsernameValidation($username)) {
                echo "Invalid username Use letters and numeric number!";
            } 
            else {

                if (!EmailValidation($email)) {
                    echo "Invalid email use mantain this format' example@gmail.com '!";
                } 
                else {

                    if (!PasswordValidation($password)) {
                        echo "Invalid password use at least 6 characters and numaric number!";
                    } 
                    else {

                        if ($password != $confirmPassword) {
                            echo "Password and confirm password do not match!";
                        } 
                        else {

                            if (!PhoneNumberValidation($phone)) {
                                echo "phone number Should  be start with '013', '014', '015', '016', '017', '018', '019' and contain 11 number!";
                            } 
                            else {

                                $user = ['firstName' => $firstname, 'lastName' => $lastname, 'userName' => $username, 'email' => $email, 'password' => $password, 'gender' => $gender, 'phone' => $phone];
                                $status = signup($user);
                                $_SESSION['user'] = $user;
                                header('location: ../view/Login.html');
                                if ($status) {
                                    echo "You have signed up successfully";
                                    $_SESSION['flag'] = 'true';
                                } else {
                                    echo "Invalid user!";
                                }
                            }
                        }
                    }
                }
            }
        }    
 
    }
}
?>
<br><a href="../view/Signup.html">Go back</a>

