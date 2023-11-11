<?php
session_start();
$UserName = $_POST['UserName'];
$password = $_POST['password'];
//$UserType = $_POST['UserType']; // Get the UserType from the form

$_SESSION['UserName'] = $UserName;

$con = new mysqli("localhost", "root", "", "reservation");
if ($con->connect_error) {
    die("Failed to connect: " . $con->connect_error);
} else {
    $stmt = $con->prepare("select * from registration where UserName = ?");
    $stmt->bind_param("s", $UserName);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    
    $loginSuccess = false; // Set a flag to indicate failed login by default
    
    if ($stmt_result->num_rows > 0) {
        $data = $stmt_result->fetch_assoc();
        if ($data['password'] === $password) {
            $loginSuccess = true; // Set the flag to indicate successful login
            echo "<h2>Welcome $UserName!, you have successfully logged in!</h2>";
        }
    }
}

?>

<!DOCTYPE html>
<html>
<head>

</head>
<body>
    
         <p  style="background-color: whitesmoke;">
            <a href="Dashboard.html"><b style="color: darkred; font-size: xx-large; margin-right: 75%;"><i>ABC RESTAURENT</i></b></a>
            <!--<a href="Signup.html">Signup</a>-->
            <a href="Dashboard.html">Logout</a><br><br>
           </p>
            <center> <input type="text"id="search" name="search" style="width: 40%;"/>
            <input type="submit" value="Search"></center><br>
        <center>
            <a href="#" style="margin: 3%;">Track Order</a>
            <a href="#">Past Orders</a>
            <a href="#" style="margin: 3%;">Book Table</a>
            <a href="#">Offers</a>
            <a href="#"style="margin: 3%;">About Us</a><br><br>
            <!-- <a class="login-button" href="logout.php">Log Out</a>;
            <img src="user-icon.jpg" alt="User Icon" style="height: 30px; width: 30px; margin-right: 5px;"><br>-->
        </center>

        <img src = "../Nokib's files/Image/promo.jpg" alt="User Icon" style= "height: 220px; width:100%;">
<br>
            <h1 align="center">Our Foods</h1>
            <table>
                <tr rowspan="3">
                <td><a href="Burger.html"><img src="../Nokib's files/Image/burger.jpg" alt="Burger" style="height: 200px; width: 200px;"></a></td>
                <td><a href="sushi.html"><img src="../Nokib's files/Image/sushi.jpg" alt="shushi" style="height: 200px; width: 200px;"></a></td>
                <td><a href="fries.html"><img src="../Nokib's files/Image/fries.jpg" alt="fries" style="height: 200px; width: 200px;"></a></td>
                <td><a href="fast_food.html"><img src="../Nokib's files/Image/fast_food.jpg" alt="fast_food" style="height: 200px; width: 200px;"></a></td>
                <td><a href="greeksalad.html"><img src="../Nokib's files/Image/greeksalad.jpg" alt="greeksalad" style="height: 200px; width: 200px;"></a></td>
                <td><a href="spaghetti.html"><img src="../Nokib's files/Image/spaghetti.jpg" alt="spaghetti" style="height: 200px; width: 200px;"></a></td>
                </tr>
                <tr>
                    <td><b>Burger</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.299</td>
                    <td><b>Sushi</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.249</td>
                    <td><b>Fries</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Fast food</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Greek salad</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Spaghetti</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                </tr>
                <tr rowspan="3">
                    <td><a href="Burger.html"><img src="../Nokib's files/Image/burger.jpg" alt="Burger" style="height: 200px; width: 200px;"></a></td>
                    <td><a href="sushi.html"><img src="../Nokib's files/Image/sushi.jpg" alt="shushi" style="height: 200px; width: 200px;"></a></td>
                    <td><a href="fries.html"><img src="../Nokib's files/Image/fries.jpg" alt="fries" style="height: 200px; width: 200px;"></a></td>
                    <td><a href="fast_food.html"><img src="../Nokib's files/Image/fast_food.jpg" alt="fast_food" style="height: 200px; width: 200px;"></a></td>
                    <td><a href="greeksalad.html"><img src="../Nokib's files/Image/greeksalad.jpg" alt="greeksalad" style="height: 200px; width: 200px;"></a></td>
                    <td><a href="spaghetti.html"><img src="../Nokib's files/Image/spaghetti.jpg" alt="spaghetti" style="height: 200px; width: 200px;"></a></td>
                <tr>
                <tr>
                    <td><b>Burger</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.299</td>
                    <td><b>Sushi</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.249</td>
                    <td><b>Fries</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Fast food</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Greek salad</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                    <td><b>Spaghetti</b><br>Delicious beef burger with lettuce, cheese, and special sauce.<br>Tk.279</td>
                </tr>
            </table>

        <!-- Add more food boxes as needed -->
            <!-- Add more food boxes as needed --> 
</body>
</html>
