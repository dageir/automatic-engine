<?php
session_start();

if ($_SESSION['user']) {
    header('Location: pages/main.php');
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
include('phpScripts/connection.php');
include('pages/header.php');
?>
<section class="row" style="margin-top: 10px">
    <div class="col">
    </div>
    <div class="col">
        <h2 style="text-align: center"><span style="padding-left: 20%;   padding-right: 20%; background-color: ivory" class="border border-2">Авторизация</span></h2>
<form action="pages/main.php" method="post">
    <div class="mx-auto w-70">
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Логин</label>
            <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
        </div>
        <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="exampleCheck1">
            <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
        </div>
        <button type="submit" class="btn btn-primary">Войти</button>
        <a class="btn btn-primary" href="pages/registr.php" role="button">Регистрация</a>
    </div>
    <br><br>
    <hr><p>Можете воспользоваться регистрацией или зайти через Логин: admin Пароль: admin</p>
    <?php
    if ($_SESSION['message'])
    {
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Ошибка! </strong>' . $_SESSION['message'] .'
  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>';
    }
    unset($_SESSION['message']);
    ?>
</form>
    </div>
    <div class="col"></div>
</section>
<section>

</section>
<?php

?>
<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-t6I8D5dJmMXjCsRLhSzCltuhNZg6P10kE0m0nAncLUjH6GeYLhRU1zfLoW3QNQDF" crossorigin="anonymous"></script>


</body>
</html>

