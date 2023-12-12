<?php
    require_once('../model/bookTableModel.php');

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

    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $guests = $_REQUEST['guests'];

    if($name == "" || $number == "" || $date == "" || $time == "" || $guests == ""){
    
        echo "fill all the section!";
    
    }else {

        if (!NameValidation($name)) {
            echo "Invalid Name Use only letters!";
        } 
        else {
            if(!PhoneNumberValidation($number)){
            echo "Invalid phone number must be 11 digit!";
            }
    else{
        $status = booktable($name, $number, $date, $time, $guests);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            echo '<script> alert("Table booked Successfully!")</script>';
        }
    }
}
}
?>
<br><a href="../view/ReservationSystem.php">Go back</a>
