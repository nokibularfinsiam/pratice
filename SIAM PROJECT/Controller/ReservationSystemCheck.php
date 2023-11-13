<?php
    require_once('../Model/bookTableModel.php');

    session_start();

    $name = $_REQUEST['name'];
    $number = $_REQUEST['number'];
    $date = $_REQUEST['date'];
    $time = $_REQUEST['time'];
    $guests = $_REQUEST['guests'];

    if($name == "" || $number == "" || $date == "" || $time == "" || $guests == ""){
    
        echo "fill all the section!";
    
    }
    else{
        $status = booktable($name, $number, $date, $time, $guests);
        
        if ($status){
            $_SESSION['flag'] = 'true';
            echo "Table booked Successfully!";
        }else{
            echo "invalid user!";
        }
    }
?>