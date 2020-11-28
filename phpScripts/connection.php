<?php
$connection = mysqli_connect('localhost','root','root','first_db');
if (!$connection)
{
    echo 'Не удалось подключиться к базе данных!<br>';
    echo mysqli_connect_error();
    exit();
}
