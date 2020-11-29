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
    include('../phpScripts/connection.php');
    ?><br><br>
    <div class="container-lg">
    <h1>Соискатели  <a href="/" class="btn btn-primary">Назад</a></h1></h1>
    <hr><br>

    <div class="row">
        <div class="col">
            <?php
                $categories = mysqli_query($connection, "SELECT * FROM `vacancy`");
                $personal = mysqli_query($connection, "SELECT * FROM `applicant`");
                $cat = mysqli_fetch_assoc($categories);
                $categ = $cat['vacancy_name'];
                While($per = mysqli_fetch_assoc($personal))
                {
                   echo  '<div class="card">
                    <h5 class="card-header">'. $categ . '</h5>
                    <div class="card-body">
                        <h5 class="card-title">'. $per['applicant_name'] .'</h5>
                        <p class="card-text">'. $per['text'] .'</p>
                        <a href="recruitment.php?id= '. $per['id'] .'" class="btn btn-primary">Подробнее</a>
                    </div>
                </div><br>';


                }?>

                </div>
        </div>

        <div class="col">
        </div>
    </div>



    </div>


    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    </body>
    </html>
<?php


?>
