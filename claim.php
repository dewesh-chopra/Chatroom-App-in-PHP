<?php
    $room = $_POST["room"];

    if(strlen($room)<2 or strlen($room)>20)
    {
        echo("<script>");
        echo("alert('Please choose a room name between 2 to 20 characters!');");
        echo("window.location='http://localhost/dc/Chatroom%20App/';");
        echo("</script>");
    }
    else if(!ctype_alnum($room))
    {
        echo("<script>");
        echo("alert('Please choose a room name with alphanumeric characters!');");
        echo("window.location='http://localhost/dc/Chatroom%20App/';");
        echo("</script>");
    }
    else
    {
        include "connect.php";
    }

    $sql = "SELECT * FROM `rooms` WHERE `room` = '$room';";
    $result = mysqli_query($conn, $sql);

    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {
            echo("<script>");
            echo("alert('Error: This room name is already taken!');");
            echo("window.location='http://localhost/dc/Chatroom%20App/';");
            echo("</script>");
        }
        else
        {
            $sql = "INSERT INTO `rooms`(`room`) VALUES('$room');";
            $result = mysqli_query($conn, $sql);

            if($result)
            {
                echo("<script>");
                echo("alert('Success: Your room has been created!');");
                echo("window.location='http://localhost/dc/Chatroom%20App/room.php?room=" . $room . "';");
                echo("</script>");
            }
        }
    }
?>