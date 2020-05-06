<?php 
    //Импорт данных с формы
    $login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
    $password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
    //Хэширование пароля
    $password = md5($password."g1g23g41h");
    //Проверка
    include("connect.php");

    $result = $mysql -> query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $result->fetch_assoc();

    if(count($user) == 0){
        echo 'Пароль или логин неверный';
        exit();
    }
    //Сохранение данных
    setcookie("id", $user['id'], time() + 3600 * 24, "/");
    setcookie("name", $user['name'], time() + 3600 * 24, "/");
    setcookie("lastname", $user['lastname'], time() + 3600 * 24, "/");
    setcookie("role", $user['role'], time() + 3600 * 24, "/");
    setcookie("online", "1", time() + 3600 * 24, "/");
    //Закрытие соединения
    $mysql -> close();
    //Перенаправление на главную страницу
    header("Location: ../index.php");    
?>
