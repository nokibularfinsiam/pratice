<!DOCTYPE html>
<html>
<head>
    <title>Notification</title>
    <link rel="stylesheet" type="text/css" href="../css/notification.css">
    <script src="../js/NotificationCheck.js"></script>

</head>
<body>

    <center>
        <form action="../controller/NotificationCheck.php" method="post" onsubmit="return valdf()">
            <fieldset>
                <legend>Give Notification</legend>
                <table>
                    <tr>
                        <td>Write here: <br>
                        <textarea name="notification" cols="70" rows="10" id="notify"></textarea></td>
                    </tr>
                    <tr>
                        <td colspan="2"><hr></td>
                    </tr>
                    <tr>
                        <td colspan='2' align="center"><input type="submit" name="submit" value="Submit"></td>
                        <h3 id="print" style="color: red;"></h3>
                    </tr>
                </table>
            </fieldset>
        </form>
    </center>
</body>
</html>
