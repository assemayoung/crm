<?php

    session_start();
    require_once 'connect.php';

    $login = $_POST['login_emp'];
    $password = $_POST['password_emp'];
    $check_user = mysqli_query($connect, "SELECT * FROM `employees` WHERE `login` = '$login' AND `password` = '$password'");
    // echo mysqli_num_rows($check_user);
    $user = mysqli_fetch_assoc($check_user);
    if (mysqli_num_rows($check_user) > 0) {


        $_SESSION['user'] = [
            "id" => $user['id'],
            "login" => $user['login'],
            "email" => $user['email'],
            "FirstName" => $user['FirstName'],
            "LastName" => $user['LastName'],
            "telephone" => $user['telephone'],
            "Birthday" => $user['Birthday'],
            "position" => $user['position'],
            "avatar" => $user['avatar']
        ];

        header('Location: ../profile.php');
        // echo "1";

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        echo "2";
    }
?>
