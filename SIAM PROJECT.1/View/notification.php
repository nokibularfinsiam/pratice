<!DOCTYPE html>
<html>
<head>
    <title>Notification</title>
    <link rel="stylesheet" type="text/css" href="../CSS/notification.css">

</head>
<body>

    <center>
        <form action="../Controller/NotificationCheck.php" method="post">
            <fieldset>
                <legend>Give Notification</legend>
                <table>
                    <tr>
                        <td>Write here: <br>
                        <textarea name="notification" cols="70" rows="10"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center"><input type="submit" name="submit" value="Submit"></td>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
</html>
