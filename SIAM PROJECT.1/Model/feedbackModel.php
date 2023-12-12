<?php
    require_once('DB.php');
    
    function feedback($email, $write){
        $con = getConnection();
        $sql = "INSERT INTO feedback (Email, Feedbacks) VALUES ('$email', '$write')";

        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getfeedback(){
        $con = getConnection();
        $sql = "select * from feedback";
        $result = mysqli_query($con, $sql);
        $viewfeedbacks = [];
        
        while($viewfeedback = mysqli_fetch_assoc($result)){
            array_push($viewfeedbacks, $viewfeedback);
        }
        
        return $viewfeedbacks;
    }
?>