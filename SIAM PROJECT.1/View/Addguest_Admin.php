<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Table Booking</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Addguest_Admin.css">

</head>
<body > 
    <center>
    <form action="../Controller/ReservationSystemCheck.php" method="post">
        <fieldset class="booking-form" style="width:350px; height: 530px">
            <legend align="center"><h2>Booking Table</h2></legend>
            <table align="center">
                <tr>
                    <td style="color:#000">Name:</td>
                    <td><input type="text" name="name"  style="width:250px"></td>
                </tr>
                <tr>
                    <td style="color:#000">Number:</td>
                    <td><input type="text" name="number"></td>
                </tr>
                <tr>
                    <td style="color:#000">Date:</td>
                    <td><input type="date" name="date" ></td>
                </tr>
                <tr>
                    <td style="color:#000">Time:</td>
                    <td><input type="time" name="time" ></td>
                </tr>
                <tr>
                    <td style="color:#000">Guests:</td>
                    <td><input type="number" name="guests"></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan='2' align="center"><input type="submit" name="submit" value="Book Table"></td>
                </tr>
            </table>
        </fieldset>
        <br>
        <br>
    </form>
    </center>
</body>
</html>
