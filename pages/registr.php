<?php
session_start();
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
<section class="row">
    <div class="col">
    </div>
    <div class="col">
        <form action="../phpScripts/singup.php" method="post" enctype="multipart/form-data">
            <div class="mx-auto w-70">
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">ФИО</label>
                    <input type="" class="form-control" id="" aria-describedby="" name="full_name">
                    <div id="" class="form-text">Введите имя</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email адрес</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    <div id="emailHelp" class="form-text">Введите действующий Email адрес!</div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Логин</label>
                    <input type="" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Аватар</label>
                    <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload" name="avatar">
                    <div id="emailHelp" class="form-text"></div>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Повторите пароль</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="pass_confirm">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Запомнить меня</label>
                </div>
                <button type="submit" class="btn btn-primary">Зарегестрироваться</button>
                <a class="btn btn-primary" href="../index.php" role="button">Уже зарегестрированы?</a>
            </div>
        </form>

        <br><br>
<?php
if ($_SESSION['message']) {
    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Ошибка! </strong>' . $_SESSION['message'] .'
  <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
</div>';

}
unset($_SESSION['message']);
?>
    </div>
        <div class="col">
        </div>
</section>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>

