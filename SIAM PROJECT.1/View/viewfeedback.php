<?php
require_once('../Model/feedbackModel.php');
include_once('../Controller/SessionCheck.php');
$viewfeedbacks= getfeedback();
?>

<html>

<head>
    <title>View Feedbacks</title>
    <link rel="stylesheet" type="text/css" href="../CSS/viewfeedback.css">


    <style>
        
    </style>
</head>

<body>

    <form action="">
        <center>
            <fieldset>
                <legend>Feedbacks</legend>
                <center>
                    <table border="1">

                        <tr>
                            <th>Email</th>
                            <th>Feedbacks</th>
                        </tr>
                        <?php for ($i = 0; $i < count($viewfeedbacks); $i++) { ?>
                            <tr>
                                <td><?= $viewfeedbacks[$i]['Email'] ?></td>
                                <td><?= $viewfeedbacks[$i]['Feedbacks'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </center>
            </fieldset>
        </center>
    </form>
</body>

</html>
