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
        <h1>Список вакансий         <a href="Staff_recruitment.php"><button type="button" class="btn btn-primary">Создать вакансию</button></a> <a href="/" class="btn btn-primary">Назад</a></h1>
        <hr><br>
        <div class="row mb-2">
            <div class="col-md-6">
            <?php
                $categories = mysqli_query($connection, "SELECT * FROM `vacancy`");
                While($cat = mysqli_fetch_assoc($categories))
                {

                    echo  '
                            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                            <div class="col p-4 d-flex flex-column position-static">
                            <strong class="d-inline-block mb-2 text-primary"></strong>
                            <h3 class="mb-0"> '.$cat['vacancy_name'] . '</h3>
                            <div class="mb-1 text-muted"></div>
                            <br>
                             <div class="row">
                            <div class="col-sm">
                              <p class="card-text mb-auto"></p>
                            </div>
                            <div class="col-sm"> 
                            </div>
                            <div class="col-sm">
                              <a href="solo_V.php?id='. $cat['id'] .' "class="btn btn-primary">Просмотреть</a>
                            </div>
                          </div>
                            
                            </div>
                        </div><br>';
                }

            if ($_SESSION['message_delete']) {
                echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_delete'] . '
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
            }
            unset($_SESSION['message_delete']);

            ?>
            </div>

        </div>
        <div class="col-md-6">
        </div>
    </div>
    </div>

    <!-- JavaScript Bundle with Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
    </body>
    </html>
<?php



