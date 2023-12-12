<?php
require_once('../Model/NotificationModel.php');
include_once('../Controller/SessionCheck.php');
$viewNotifications = getNotification();
?>

<html>

<head>
    <title>View Notification</title>
    <link rel="stylesheet" type="text/css" href="../CSS/viewnotification_Admin.css">
</head>

<body>

    <form action="viewnotification_Admin.php" method="POST">
        <center>
            <fieldset>
                <legend>Notification</legend>
                <center>
                    <table border="1">

                        <tr>
                            <th>ID</th>
                            <th>Notifications</th>
                        </tr>
                        <?php for ($i = 0; $i < count($viewNotifications); $i++) { ?>

                            <tr>
                                <td><?= $viewNotifications[$i]['ID'] ?></td>
                                <td><?= $viewNotifications[$i]['Notifications'] ?></td>

                            </tr>
                        <?php } ?>
                    </table>
                </center>
            </fieldset>
        </center>

        <center>
            <fieldset><br>
                ID: <input type="text" name="delete" value="" />
                <button type="submit" name="submit" value="submit">Delete</button>
            </fieldset>
        </center>
    </form>

</body>

</html>

<?php
require_once('../Model/NotificationModel.php');
if (isset($_POST['delete'])) {

    $del = $_POST['delete'];

    if ($del == "") {
        echo "null value inserted";
    } else {
        deletetb($del);
        header('location: viewnotification_Admin.php');
    }
}
?>
