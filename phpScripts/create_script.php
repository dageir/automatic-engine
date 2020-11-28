<?php
session_start();
require_once 'connection.php';
$demand = $_POST['demand'];
$responsibility = $_POST['responsibility'];
$conditions = $_POST['conditions'];
$key_skill = $_POST['key_skill'];


if(isset($_POST['demand_S']))
{
    if ($demand != '') {
        mysqli_query($connection, "INSERT INTO `demand` (`demands`) VALUES ('$demand')");
        $_SESSION['message_1'] = 'Требование успешно создано!';
        header('Location: ../pages/crt.php');
    }else{
        $_SESSION['message_1'] = 'Заполните поле!';
        header('Location: ../pages/crt.php');
}

}
if(isset($_POST['responsibility_S']))
{
    if ($responsibility != '') {
        mysqli_query($connection, "INSERT INTO `responsibility` (`responsibilitys`) VALUES ('$responsibility')");
        $_SESSION['message_2'] = 'Обязанность успешно создана!';
        header('Location: ../pages/crt.php');
    } elseif ($responsibility == '') {
        $_SESSION['message_2'] = 'Заполните поле!';
        header('Location: ../pages/crt.php');
    }
}
if (isset($_POST['conditions_S'])) {
    if ($conditions != '') {
        mysqli_query($connection, "INSERT INTO `conditions` (`work_condition`) VALUES ('$conditions')");
        $_SESSION['message_3'] = 'Условие успешно добавлено!';
        header('Location: ../pages/crt.php');
    } else {
        $_SESSION['message_3'] = 'Заполните поле!';
        header('Location: ../pages/crt.php');
    }
}
if (isset($_POST['key_skill_S'])) {
    if ($key_skill != '') {
        mysqli_query($connection, "INSERT INTO `key_skill` (`skill`) VALUES ('$key_skill')");
        $_SESSION['message_4'] = 'Навык успешно добавлен!';
        header('Location: ../pages/crt.php');
    } else {
        $_SESSION['message_4'] = 'Заполните поле!';
        header('Location: ../pages/crt.php');
    }
}





