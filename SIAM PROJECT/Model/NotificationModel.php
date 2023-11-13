<?php
    require_once('DB.php');

    function notification($notify){
        $con = getConnection();
        $sql = "INSERT INTO notify (Notifications) VALUES ('$notify')";

        
        if(mysqli_query($con, $sql)){
            return true;
        }else{
            return false;
        }
    }

    function getNotification(){
        $con = getConnection();
        $sql = "select * from notify";
        $result = mysqli_query($con, $sql);
        $viewNotifications = [];
        
        while($viewNotification = mysqli_fetch_assoc($result)){
            array_push($viewNotifications, $viewNotification);
        }
        
        return $viewNotifications;
    }
?>