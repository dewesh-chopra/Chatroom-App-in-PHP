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
            <h1>Chatroom App</h1>

            <p class="lead">This chatroom app lets you chat with your friends over the internet, using a chatroom link. Claim a room to recieve a unique chatroom id and start chatting now.</p>

            <p class="lead">
                <form action="claim.php" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="Enter a valid name for your room" name="room">
                        <button type="submit" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Claim this room</button>
                    </div>
                </form>
            </p>
        </main>

        <footer class="mt-auto text-white-50">
            <p>Created by - Dewesh Chopra</p>
        </footer>
    </div>
</body>
</html>