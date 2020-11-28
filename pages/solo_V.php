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
$vac = mysqli_query($connection, "SELECT * FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);
$string = mysqli_query($connection, "SELECT `demand_id` FROM `vacancy` WHERE `id` = ". (int) $_GET['id']);

$myrow = mysqli_fetch_array ($string);

$arr = explode(" ", $myrow['demand_id']);
print_r($arr);
$N = count($arr);

if(mysqli_num_rows($vac) <= 0)
{
    echo '<h3>Не найдено!</h3>';

}else{
    for($i=0; $i < $N; $i++)
        {
            $k = mysqli_query($connection, "SELECT `demands` FROM `demand` WHERE `id` = ". $arr[i]);
            $row= mysqli_fetch_array($k);
            $demands = $row['demands'];
            $row= mysqli_fetch_array($demands); // fetch the array
            $demands1 = $row['demands'];
            echo $demands1;
        }






}


?>








<!--<div class="container-lg">
    <h1><?php /*echo $vac_Z['vacancy_name'] */?></h1>
    <hr>
    <h3>Требования:</h3><br>
    <h4><?php /*While($vac_Z= mysqli_fetch_assoc($vac))
        {
        echo  '<ul class="list-group list-group-flush">
                    <li class="list-group-item">' . $vac_Z['demand_id'] . ' </li>
               </ul>';
        }
        */?>
        </h4>
-->

</div>

<!-- JavaScript Bundle with Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-popRpmFF9JQgExhfw5tZT4I9/CI5e2QcuUZPOVXb1m7qUmeR2b50u+YFEYe1wgzy" crossorigin="anonymous"></script>
</body>

    </html>
<?php ?>



