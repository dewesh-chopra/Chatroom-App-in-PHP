<?php
    $room = $_GET["room"];

    include "connect.php";

    $sql = "SELECT * FROM `rooms` WHERE `room` = '$room';";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        if (mysqli_num_rows($result) == 0) {
            echo ("<script>");
            echo ("alert('Error: This room does not exists!');");
            echo ("window.location='http://localhost/dc/Chatroom%20App/';");
            echo ("</script>");
        }
    }
?>

<!doctype html>
<html lang="en" class="h-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Chatroom App</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>

    <style>
        .container {
            background-color: #4f4f4f;
            border-radius: 5px;
            padding: 10px;
            margin: 10px 0;
        }

        .darker {
            background-color: #2e2e2e;
        }

        .container::after {
            content: "";
            clear: both;
            display: table;
        }

        .container img {
            float: left;
            max-width: 60px;
            width: 100%;
            margin-right: 20px;
            border-radius: 50%;
        }

        .container img.right {
            float: right;
            margin-left: 20px;
            margin-right: 0;
        }

        .time-right {
            float: right;
        }

        .time-left {
            float: left;
        }
    </style>

    <!-- Custom styles for this template -->
    <link href="css/cover.css" rel="stylesheet">
</head>

<body class="d-flex h-100 text-center text-white bg-dark">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
        <header class="mb-auto">
            <div>
                <h3 class="float-md-start mb-0">Chatroom App</h3>

                <nav class="nav nav-masthead justify-content-center float-md-end">
                    <a class="nav-link active" aria-current="page" href="http://localhost/dc/Chatroom%20App/">Home</a>
                    <a class="nav-link" href="#">About</a>
                    <a class="nav-link" href="#">Contact Us</a>
                </nav>
            </div>
        </header>

        <main class="px-3">
            <h2>Chat Messages - <?php echo($room);?></h2>

            <div class="container">
                <img src="img/message.png" alt="Avatar" style="width:100%;">
                <p>Hello. How are you today?</p>
                <span class="time-right">11:00</span>
            </div>

            <div class="container darker">
                <img src="img/message.png" alt="Avatar" class="right" style="width:100%;">
                <p>Hey! I'm fine. Thanks for asking!</p>
                <span class="time-left">11:01</span>
            </div>

            <div class="container">
                <img src="img/message.png" alt="Avatar" style="width:100%;">
                <p>Sweet! So, what do you wanna do today?</p>
                <span class="time-right">11:02</span>
            </div>

            <div class="container darker">
                <img src="img/message.png" alt="Avatar" class="right" style="width:100%;">
                <p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
                <span class="time-left">11:05</span>
            </div>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Created by - Dewesh Chopra</p>
        </footer>
    </div>
</body>
</html>