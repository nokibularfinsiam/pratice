<?php
require_once('../model/bookTableModel.php');
$viewtables = getbooktable();

if(isset($_POST['search']))
{
    $search=$_POST['search'];
    if($search=="")
    {
        echo $message="you must type valid username";
    }
    else{
        $viewtables = searchtable($search);
        if(!$viewtables)
        {
            echo $message = "No data found";
        }
    }
}

if (isset($_POST['delete'])) {

    $dl = $_POST['delete'];

    if ($dl == "") {
        echo "null value inserted";
    } else {
        deletetb($dl);
        header('location: booktable_Admin.php');
    }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>View tables</title>
    <link rel="stylesheet" type="text/css" href="../css/booktable.css">
    <script src="../js/bookedtable.js"></script>

</head>

<body>
    <div class="content" id="info">
        <form action="booktable_Admin.php" method="POST" class="form-container" id="info">
        <center>
            <input type="text" id="search" name="search" class="search">
            <input type="button" name="submit" value="search" id="search" class="searchb" onclick="search_ajax()">
            <br><span id="h1"></span>
        </center>

            <fieldset>
                <legend>Booked table</legend>
                <div class="table-container">
                    <table border="1" id="table">
                        <tr>
                            <th>Name</th>
                            <th>Number</th>
                            <th>Date</th>
                            <th>Time</th>
                            <th>Guests</th>
                        </tr>
                        <?php for ($i = 0; $i < count($viewtables); $i++) { ?>
                            <tr>
                                <td><?= $viewtables[$i]['Name'] ?></td>
                                <td><?= $viewtables[$i]['Number'] ?></td>
                                <td><?= $viewtables[$i]['Date'] ?></td>
                                <td><?= $viewtables[$i]['Time'] ?></td>
                                <td><?= $viewtables[$i]['Guests'] ?></td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
                <br>
                <a class="nav-link" href="Addguest_Admin.php" style="margin-right: 3%;">Book Table</a>
                <label for="delete">Phone number:</label>
                <input type="text" id="delete" name="delete" value="" />
                <button type="submit" name="submit" value="submit">Delete</button>
            </fieldset>
        </form>
    </div>
</body>

</html>

