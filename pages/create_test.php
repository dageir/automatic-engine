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


                                    <h1>Редактор тестов </h1>
                                    <hr><br>

                                    <section class="row" style="margin-top: 10px">
                                        <div class="col">
                                            <h2>Создание нового вопроса</h2>
                                            <form action="../phpScripts/create_script.php" method="post">
                                                <div class="mb-3">
                                                    <h4><label for="exampleFormControlTextarea1" class="form-label">Вопрос</label></h4>
                                                    <input type="" name="demand" class="form-control" id="" aria-describedby=""><br>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Первый вариант ответа</label>
                                                    <input type="" name="demand" class="form-control" id="" aria-describedby=""><br>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Второй вариант ответа</label>
                                                    <input type="" name="demand" class="form-control" id="" aria-describedby=""><br>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Третий вариант ответа</label>
                                                    <input type="" name="demand" class="form-control" id="" aria-describedby=""><br>
                                                    <label for="exampleFormControlTextarea1" class="form-label">Четвёртый вариант ответа</label>
                                                    <input type="" name="demand" class="form-control" id="" aria-describedby=""><br>
                                                </div>





                                            </form>

                                            <br>
                                            <h2>Создание нового теста</h2>
                                            <form action="../phpScripts/create_script.php" method="post">
                                                <div class="mb-3">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                                                    <input type="" name="responsibility" class="form-control" id="" aria-describedby="">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                                                    <input type="" name="responsibility" class="form-control" id="" aria-describedby="">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                                                    <input type="" name="responsibility" class="form-control" id="" aria-describedby="">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                                                    <input type="" name="responsibility" class="form-control" id="" aria-describedby="">
                                                    <label for="exampleFormControlTextarea1" class="form-label">Название обязанности</label>
                                                    <input type="" name="responsibility" class="form-control" id="" aria-describedby="">


                                                </div>
                                                <button type="submit" name="responsibility_S" class="btn btn-primary">Добавить</button>
                                            </form>

                                            <br>


                                            <br>
                                        </div>



                                            <div class="col">
                                                <h3>Ваши тесты</h3>
                                                <br>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected>Open this select menu</option>
                                                    <option value="1">One</option>
                                                    <option value="2">Two</option>
                                                    <option value="3">Three</option>
                                                </select>
                                            </div>
</section>


                                </div>

                                <!-- JavaScript Bundle with Popper.js -->
                                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>

                                </html>






</body>
