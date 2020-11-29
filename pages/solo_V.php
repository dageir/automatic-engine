<?php
session_start();
unset($_SESSION['create']);
include('../phpScripts/connection.php');
$categories = mysqli_query($connection, "SELECT * FROM `vacancy`");
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
<?php
$vac = mysqli_query($connection, "SELECT * FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);
while($art = mysqli_fetch_assoc($vac)){
?>
<h1><?php echo $art['vacancy_name']; ?> </h1>
<hr>

<?php


$string = mysqli_query($connection, "SELECT `demand_id` FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);

$myrow = mysqli_fetch_array ($string);

$arr = explode(" ", $myrow['demand_id']);
$N = count($arr);
        echo '<h2>Требования: </h2><br>';
for ($i = 0; $i < $N; $i++) {
    $vr = $arr[$i];
    $string1 = mysqli_query($connection, "SELECT demands FROM demand WHERE id = '$vr'");
    While($cat = mysqli_fetch_assoc($string1)){
     echo '<ul><li>' . $cat['demands'] . '</li></ul>';
    }
}

$string = mysqli_query($connection, "SELECT `responsibility_id` FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);

$myrow = mysqli_fetch_array ($string);

$arr2 = explode(" ", $myrow['responsibility_id']);
$N = count($arr2);
        echo '<h2>Обязанности: </h2><br>';
for ($i = 0; $i < $N; $i++) {
    $vr = $arr2[$i];
    $string1 = mysqli_query($connection, "SELECT responsibilitys FROM responsibility WHERE id = '$vr'");
    While($cat = mysqli_fetch_assoc($string1)){
     echo '<ul><li>' . $cat['responsibilitys'] . '</li></ul>';
    }
}

$string = mysqli_query($connection, "SELECT `conditions_id` FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);

$myrow = mysqli_fetch_array ($string);

$arr3 = explode(" ", $myrow['conditions_id']);
$N = count($arr3);
    echo '<h2>Условия работы: </h2><br>';
    for ($i = 0; $i < $N; $i++) {
        $vr = $arr3[$i];
        $string1 = mysqli_query($connection, "SELECT work_condition FROM conditions WHERE id = '$vr'");
        While($cat = mysqli_fetch_assoc($string1)){
            echo '<ul><li>' . $cat['work_condition'] . '</li></ul>';
        }
    }

$string = mysqli_query($connection, "SELECT `key_skill_id` FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);

$myrow = mysqli_fetch_array ($string);

$arr4 = explode(" ", $myrow['key_skill_id']);
$N = count($arr4);
    echo '<h2>Ключевые навыки: </h2><br>';
    for ($i = 0; $i < $N; $i++) {
        $vr = $arr4[$i];
        $string1 = mysqli_query($connection, "SELECT skill FROM key_skill WHERE id = '$vr'");
        While($cat = mysqli_fetch_assoc($string1)){
            echo '<ul><li>' . $cat['skill'] . '</li></ul>';
        }
    }
}?><br><hr>
    <a href="#" class="btn btn-primary">Редактировать</a>  <a href="../phpScripts/delete_vacations.php?id= <?php echo $_GET['id'];?>" class="btn btn-primary">Удалить</a>

</div>

</div>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>

    </html>