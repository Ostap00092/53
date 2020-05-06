<?php
    
    //Импорт данных с формы
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
    $lastname = filter_var(trim($_POST['lastname']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    $role = $_POST['role'];
    //Проверка введенных данных
    if (mb_strlen($login) == "" || mb_strlen($login) > 32) {
        echo 'Недопустимая длина имени';
        exit();
    }elseif (mb_strlen($name) == "" || mb_strlen($name) > 32) {
        echo 'Недопустимая длина фамилии';
        exit();
    }elseif(mb_strlen($lastname) == '' || mb_strlen($lastname) > 32 ) {
        echo 'Недопустимая длина логина';
        exit();
    }elseif(mb_strlen($password) == '' || mb_strlen($password) > 32 || mb_strlen($password) < 8 ) {
        echo 'Недопустимая длина пароля';
        exit();
    }elseif(mb_strlen($role) == '') {
        echo 'Выберите роль';
        exit();
    }
    //Хэштрование пароля
    $password = md5($password."g1g23g41h");
    //Импорт файла
    include("connect.php");
    //Проверка существует ли пользователь с тем же логином
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login'");

    $num1 = mysqli_num_rows($result);

    if ($num1 == 1) {
        echo 'Пользователь с таким логином уже существует';
        exit();
    }
    //Запись в базу данных
    $res = $mysql->query("INSERT INTO `users` (`login`, `name`, `lastname`, `password`, `role`) 
    VALUES ('$login', '$name', '$lastname', '$password', '$role')");
    //Закрытие соединения
    $mysql->close();
    //Перенаправление на страницу авторизации
    header("Location: ../index.php");
?>