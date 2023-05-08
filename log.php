<?php
session_start(); // Start the session
$username = "";
$password = "";
$errorMsg = "";

include("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the user
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Check if the username and password are valid
    $sql = "SELECT * FROM `admin` WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        // Set the session variables and redirect to the dashboard
        $_SESSION['loggedin'] = true;
       
        header("Location: Admin/dashboard.php");
        exit();
    } else {
        // Display an error message if the login was invalid
         header("Location: index.php");
    }
}
?>
