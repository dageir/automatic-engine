<?php
session_start();
include('../phpScripts/connection.php');
mysqli_query($connection, "DELETE FROM `vacancy` WHERE `vacancy`.`id` =". (int) $_GET['id']);
$_SESSION['message_delete'] = 'Вакансия успешно удалена!';
header('Location: ../pages/vacations.php');
