<!DOCTYPE html>
<html>
<head>
    <title>Restaurant Table Booking</title>
    <link rel="stylesheet" type="text/css" href="../CSS/Addguest_Admin.css">
    <script src="../JS/ReservationSystemCheck.js"></script>
</head>
<body > 
    <center>
    <form action="../Controller/ReservationSystemCheck.php" method="post" onsubmit="return vldf()">
        <fieldset class="booking-form" style="width:350px; height: 570px">
            <legend align="center"><h2>Booking Table</h2></legend>
            <table align="center">
                <tr>
                    <td style="color:#000">Name:</td>
                    <td><input type="text" name="name" style="width:250px" id="name"></td>
                </tr>
                <tr>
                    <td style="color:#000">Number:</td>
                    <td><input type="text" name="number" id="number"></td>
                </tr>
                <tr>
                    <td style="color:#000">Date:</td>
                    <td><input type="date" name="date" id="date"></td>
                </tr>
                <tr>
                    <td style="color:#000">Time:</td>
                    <td><input type="time" name="time" id="time"></td>
                </tr>
                <tr>
                    <td style="color:#000">Guests:</td>
                    <td><input type="number" name="guests" id="guests"></td>
                </tr>
                <tr>
                    <td colspan="2"></td>
                </tr>
                <tr>
                    <td colspan='2' align="center"><input type="submit" name="submit" value="Book Table"></td>
                    <h3 id="print" style="color: red;"></h3>
                </tr>
            </table>
        </fieldset>
        <br>
        <br>
    </form>
    </center>
</body>
</html>
