<?php
session_start();
include('../phpScripts/connection.php');
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
include('header.php');
?>
<div class="container" style="margin-top: 10px ">
    <div class="row">
        <div class="col-4">
            <!--<img src="<?php /*echo '../'.$_SESSION['user']['avatar']; */?>" class="img-thumbnail"  alt="...">-->
        </div>
        <div class="col-8">

                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><h1><?php echo $_SESSION['user']['full_name']; ?></h1> </li>
                    <li class="list-group-item"><h3>Ваш логин: <?php echo $_SESSION['user']['login']; ?></h3></li>
                    <li class="list-group-item"><h3>Ваш email: <a href=""><?php echo $_SESSION['user']['email']; ?></a> </h3></li>

            </div>
        </div>
    </div>
</div>


<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>
<?php

