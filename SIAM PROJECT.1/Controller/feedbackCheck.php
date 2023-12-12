<?php
    require_once('../Model/feedbackModel.php');

    session_start();

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

    $email = $_REQUEST['email'];
    $feedback = $_REQUEST['feedback'];

    if($email == "" || $feedback == ""){
    
        echo "fill all the section!";
    
    } else {
        if (!EmailValidation($email)) {
            echo "Invalid email use mantain this format' example@gmail.com '!";
        } else{
        $status = feedback($email, $feedback);
        
       if ($status){
            $_SESSION['flag'] = 'true';
            echo '<script> alert("Thank you for your feedback") </script>';

        }//else{
           // echo "invalid user!";
       // }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Feedback</title>
    <script src="../JS/feedbackCheck.js"></script>
</head>
<body >
    
<center>
    <form action="../Controller/feedbackCheck.php" method="post" enctype="multipart/form-data" onsubmit="return vldf()">
        <script src="../Controller/feedbackCheck.js"></script>
        <fieldset style="height: 300px; width:500px">
        <style></style>
            <legend align="center"><h1>Give Feedback</h1></legend>
                <table>
                    <tr>
                        <td>Email:</td>
                        <td><input type="text" id="email" name="email" style="width: 522px;"></td>
                    </tr>
                    <tr>
                        <td>write here:</td>
                        <td><textarea name="feedback" id="feedback" cols="70" rows="8" ></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr style="width:580px" align="left"></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center"><input type="submit" name="submit" id="submit" value="submit"></td>
                        <h2 id="print" style="color: red;"></h2>
                        <h2 id="print1" style="color: green;"></h2>

                    </tr>
                </table>
        </fieldset>
    </form>
    </center>
</body>
</html>

