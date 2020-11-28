<?php
    session_start();
    require_once 'connection.php';
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $login = $_POST['login'];
    $pass = $_POST['pass'];
    $pass_confirm = $_POST['pass_confirm'];

        If ($pass_confirm == $pass)
        {
            //con...
            $image = 'uploads/' . time() . $_FILES['avatar']['name'];
            if(!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $image)){
                $_SESSION['message'] = 'Загрузите изображение!';
                header('Location: ../pages/registr.php');
                exit();
            }
            mysqli_query($connection, "INSERT INTO `users_2` (`full_name`, `email`, `login`, `avatar`, `pass`) VALUES ( '$full_name', '$email', '$login', '$image', '$pass')");
            header('Location: ../index.php');
        }else{
            $_SESSION['message'] = 'Пароли не совпадают';
            header('Location: ../pages/registr.php');
        }



