<?php
    $servername = "localhost";
    $username = "root";
    $password = "password";
    $database = "chatroom_app";
    
    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn)
    {
        die("Error: Could not connect to the database!");
    }
?>