<?php
$conn = mysqli_connect("localhost", "root", "", "bluebell");

if (mysqli_connect_errno()) {
    // Print the error message and stop the script
    die("Error connecting to database: " . mysqli_connect_error());
}


?>
