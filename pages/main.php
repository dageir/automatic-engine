<?php
session_start();
include('../phpScripts/connection.php');
if($_POST[login]) {
    $login = $_POST[login];
    $pass = $_POST[pass];
    $checkReg = mysqli_query($connection, "SELECT * FROM `users_2` WHERE `login` = '$login' AND `pass` = '$pass'");
    if (mysqli_num_rows($checkReg) == 0)
    {
        $_SESSION['message'] = 'Неправильный логин или пароль!';
        header('Location: ../index.php');
        exit();
    }else{
        $user = mysqli_fetch_assoc($checkReg);
        $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "login" => $user['login'],
            "email" => $user['email']
        ];
    }
}
if (!$_SESSION['user']) {
    header('Location: ../index.php');
}

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-CuOF+2SnTUfTwSZjCXf01h7uYhfOBuxIhGKPbfEJ3+FqH/s6cIFN9bGr1HmAg4fQ" crossorigin="anonymous">
    <title>Document</title>
</head>

<?php
include('header.php');
?>


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



<body>



<main class="container">
    <br>
    <div class="p-4 p-md-5 mb-4 text-black rounded bg-light">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic"><b>Статистика</b></h1>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <p class="lead my-3">Кол-во созданных вакансий:
                           <!-- <?php
/*                            $count_2 = query($connection, "SELECT COUNT(*) as count FROM vacancy");
                            echo $count_2;
                            */?></p>-->
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="lead my-3">Кол-во просмотров вакансий: <?php ?></p>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p class="lead my-3">Кол-во отправленный резюме: <?php ?></p>
                    </div>
                    <div class="col">

                    </div>
                </div>
                <button type="button" class="btn btn-primary">Подробнее</button>
        </div>
        </div>
    </div>

    <div class="row ">
        <div class="col-md-6">
            <a href="recruitment.php" style="text-decoration:none; color: #000 !important;"><div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"></strong>
                    <h3 class="mb-0">Подбор персонала</h3>
                    <div class="mb-1 text-muted"></div>
                    <p class="card-text mb-auto"></p>

                    </div></a>

            </div>
        </div>
        <div class="col-md-6">
            <a href="vacations.php" style="text-decoration:none; color: #000 !important;"><div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                    <strong class="d-inline-block mb-2 text-primary"></strong>
                    <h3 class="mb-0">Вакансии</h3>
                    <div class="mb-1 text-muted"></div>
                    <p class="card-text mb-auto"></p>
                </div></a>

        </div>
    </div>
        <div class="col-md-6">
            <a href="test_main.php" style="text-decoration:none; color: #000 !important;"><div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0">Тестирование</h3>
                        <div class="mb-1 text-muted"></div>
                        <p class="card-text mb-auto"></p>
                    </div></a   >

        </div>
    </div>



    </div>








</main><!-- /.container -->

<footer class="blog-footer">

</footer>






<section>
    <div class="container-xxl">

    </div>
</section>
<?php

?>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>

