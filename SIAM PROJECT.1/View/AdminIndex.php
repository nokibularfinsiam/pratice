<?php 
   include_once('../Controller/SessionCheck.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Index</title>
</head>
<body>
    <p  style="background-color: whitesmoke;">
        <a href="AdminIndex.php"><b style=" font-size: xx-large; margin-right: 70%;"><i>ABC RESTAURENT</i></b></a>
        <a href="../Controller/LogoutCheck.php">Logout</a>
    </p>
    <center>
    <a href="booktable_Admin.php">Table Reservation</a>
    <a href="viewfeedback.php" style="margin: 3%;">See Feedback</a>
    <a href="notification.php">Send Notification</a>
    <a href="viewnotification_Admin.php" style="margin: 3%;">View Notification</a>

</center>
    
</body>
</html>