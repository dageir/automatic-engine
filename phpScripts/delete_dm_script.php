<?php
session_start();
include('../phpScripts/connection.php');
$sel = $_POST['select'];
if(isset($sel)){
    mysqli_query($connection, "DELETE FROM `demand` WHERE `demand`.`id` =". $sel);
    $_SESSION['message_delete_1'] = 'Требование успешно удалено!';
    header('Location: ../pages/crt.php ');
}
$sel_2 = $_POST['select-2'];
if(isset($sel_2)){
    mysqli_query($connection, "DELETE FROM `responsibility` WHERE `responsibility`.`id` =". $sel_2);
    $_SESSION['message_delete_2'] = 'Обязанность успешно удалена!';
    header('Location: ../pages/crt.php ');
}

$sel_3 = $_POST['select-3'];
if(isset($sel_3)){
    mysqli_query($connection, "DELETE FROM `conditions` WHERE `conditions`.`id` =". $sel_3);
    $_SESSION['message_delete_3'] = 'Условие работы успешно удалено!';
    header('Location: ../pages/crt.php ');
}

$sel_4 = $_POST['select-4'];
if(isset($sel_4)){
    mysqli_query($connection, "DELETE FROM `key_skill` WHERE `key_skill`.`id` =". $sel_4);
    $_SESSION['message_delete_4'] = 'Ключевой навык успешно удалён!';
    header('Location: ../pages/crt.php ');
}

