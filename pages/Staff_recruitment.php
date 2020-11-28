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
    <div><h1>Создание вакансии <a href="main.php">Вернуться назад</a></h1>   </div>
    <hr><br>
    <form method="post" action="../phpScripts/create_vacancies.php">
    <div class="row">
        <div class="col-sm">
            <div class="mb-3">
                <label for="" class=""><h2>Название</h2></label>
                <input name="vacancy_name"  class="form-control" >
            </div>
        </div>
        <div class="col-sm">

        </div>
        <div class="col-sm">

        </div>
    </div>
    <br>

        <h2>Требования <a href="crt.php" name="Button" type="" class="btn btn-primary">Добавить</a></h2>
        <?php
        $categories = mysqli_query($connection, "SELECT * FROM `demand`");
        $categ_ar = array();

        While($cat = mysqli_fetch_assoc($categories))
        {
            $categ_ar[] = $cat;
            echo  '<div class="form-check">
                          <input type="checkbox" value="'. $cat['id'] .'" name="demand[]" class="form-check-input">'
                .$cat['demands'] . '
                   </div>';
        }

        ?>
        <br>

        <br>


    <br><br>

        <h2>Обязанности <a href="crt.php" name="Button" type="button" class="btn btn-primary">Добавить</a></h2>
        <?php
        $categories = mysqli_query($connection, "SELECT * FROM `responsibility`");
        $categ_ar = array();
        While($cat = mysqli_fetch_assoc($categories))
        {
            $categ_ar[] = $cat;
            echo  '<div class="form-check">
                      <input class="form-check-input" type="checkbox" value="'. $cat['id'] .' " name="responsibilitys[]">
                      '
                .$cat['responsibilitys'] .
                '</label>
                   </div>';
        }
        ?>
        <br>

    <br><br>

        <h2>Условия работы <a href="crt.php" name="Button" type="button" class="btn btn-primary">Добавить</a></h2>
        <?php
        $categories = mysqli_query($connection, "SELECT * FROM `conditions`");
        $categ_ar = array();
        While($cat = mysqli_fetch_assoc($categories))
        {
            $categ_ar[] = $cat;
            echo  '<div class="form-check">
                      <input class="form-check-input" type="checkbox" value="'. $cat['id'] .'" id="flexCheckDefault" name="work_condition[]">
                      '
                .$cat['work_condition'] .
                '</label>
                   </div>';
        }
        ?>
        <br>

    <br><br>

        <h2>Ключевые навыки <a href="crt.php" name="Button" type="button" class="btn btn-primary">Добавить</a></h2>
        <?php
        $categories = mysqli_query($connection, "SELECT * FROM `key_skill`");
        $categ_ar = array();
        While($cat = mysqli_fetch_assoc($categories))
        {
            $categ_ar[] = $cat;
            echo  '<div class="form-check">
                      <input class="form-check-input" type="checkbox" value="'. $cat['id'] .'" id="flexCheckDefault" name="skill[]">
                      <label class="form-check-label" for="flexCheckDefault">'
                .$cat['skill'] .
                '</label>
                   </div>';
        }
        ?>
        <br>

    <br><br>
    <button type="submit" class="btn btn-primary">Создать вакансию</button>
    </form>
    <?php
    if ($_SESSION['message_1'])
    {
        echo '<br><div class="alert alert-warning alert-dismissible fade show" role="alert">
                              <strong></strong>' . $_SESSION['message_1'] .'
                              <button type="button" class="btn-close" data-dismiss="alert" aria-label="Close"></button>
                            </div>';
    }
    unset($_SESSION['message_1']);
    ?>
</div>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>
</html>
<?php



