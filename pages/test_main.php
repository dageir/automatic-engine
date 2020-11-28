<?php
session_start();
unset($_SESSION['create']);
include('../phpScripts/connection.php');
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
<div class="container-lg">
    <br>
    <h1>Редактор тестов</h1>
    <hr><br><br>
    <div class="row ">
        <div class="col-md-6">
            <a  style="text-decoration:none; color: #000 !important;"><div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                    <div class="col-sm">
                            <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary"></strong>
                            <h3 class="mb-0" style="text-align: center">Создать тест </h3><br>
                            <div class="mb-1 text-muted"></div>
                            <div class="row">
                            <p class="card-text mb-auto"></p>
                            </div>
                            <div class="col-sm">
                            </div><a href="create_test.php"class="btn btn-primary">Просмотреть</a>
                            <div class="col-sm">

                            </div>


                    </div>
                    </div>
        </div>
    </div>
    <div class="col-md-6">
        <a href="vacations.php" style="text-decoration:none; color: #000 !important;"><div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col-sm">
                    <div class="col p-4 d-flex flex-column position-static">
                        <strong class="d-inline-block mb-2 text-primary"></strong>
                        <h3 class="mb-0" style="text-align: center">Изменить тест </h3><br>
                        <div class="mb-1 text-muted"></div>
                        <div class="row">
                            <p class="card-text mb-auto"></p>
                        </div>
                        <div class="col-sm">
                        </div><a href=""class="btn btn-primary">Создать</a>
                        <div class="col-sm">
                        </div>


                    </div>
                </div>
</div>








































<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>









































